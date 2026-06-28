<?php

// specify whether module wil ONLY use cookies to store session id on client side
ini_set("session.use_only_cookies", 1);

// module will not accept uninitialized session IDs
ini_set("session.use_strict_mode", 1);


session_set_cookie_params(
    [
        "lifetime" => 1800, //30 minit *60s
        "domain" => 'localhost',

        // Path on the domain where the cookie will work. 
        // Use a single slash ('/') for all paths on the domain.
        "path" => "/",

        "secure" => true,
        "httponly" => true
    ]
);


// start session
session_start();


if (isset($_SESSION['user_id'])) {

    if (!isset($_SESSION['last_regeneration'])) {

        regenerate_session_id_logged_in();
    } else {
        // 30 minit *60s
        $interval = 60 * 30;

        // lepasi certain time(30 minit), kena regenerate new session ID
        if (time() - $_SESSION['last_regeneration'] >= $interval) {
            regenerate_session_id_logged_in();
        }
    }
} else {
    if (!isset($_SESSION['last_regeneration'])) {

        regenerate_session_id();
    } else {

        // 30 minit *60s
        $interval = 60 * 30;

        // lepasi certain time(30 minit), kena regenerate new session ID
        if (time() - $_SESSION['last_regeneration'] >= $interval) {
            regenerate_session_id();
        }
    }
}


// regenerate session ID
function regenerate_session_id()
{

    session_regenerate_id(true);

    // current time
    $_SESSION['last_regeneration'] = time();
}


function regenerate_session_id_logged_in()
{

    session_regenerate_id(true);


    $userId = $_SESSION['user_id'];

    // new session ID
        $newSessionId = session_create_id();

        // result[id] is user ID
        $sessionId = $newSessionId . "_" . $userId;

        session_id($sessionId);


    // current time
    $_SESSION['last_regeneration'] = time();
}
