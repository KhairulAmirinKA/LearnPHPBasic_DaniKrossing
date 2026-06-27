<?php

echo "<h1>General Hashing</h1>";
display_general_hashing();

echo "<h1>Password Hashing Using Bcrypt</h1>";
display_password_hashing();



function display_general_hashing()
{
    $password = "plainPassword";

    $salt = bin2hex(random_bytes(16));
    $pepper = "ASecretPepperString";

    echo  "Salt: " . $salt . "<br>";

    $data_to_hash = $password . $salt . $pepper;

    $hashed_password = hash("sha256", $data_to_hash);

    echo "Hashed password: " . $hashed_password;


    echo "<h2>Verify hash</h2>";

    // hash verification
    $sensitive_data = $password;

    $storedSalt = $salt;
    $storedHash = $hashed_password;

    $pepper = "ASecretPepperString";

    $dataToHash = $sensitive_data . $storedSalt . $pepper;

    $verificationHash = hash("sha256", $dataToHash);

    if ($storedHash === $verificationHash) {
        echo "Data are same";
        echo "Stored hash: " . $storedHash . "<br>";
        echo "Verification hash: " . $verificationHash;
    } else {
        echo "Data not same";
    }
}



function display_password_hashing(){

$plainPassword = "my password";

$options = [
    'cost' => 12
];

$hashedPassword = password_hash($plainPassword, PASSWORD_BCRYPT, $options);

$plainPasswordToLogin = "my password";

if (password_verify($plainPasswordToLogin, $hashedPassword)){
    echo "Login success";
}
else{
    echo "Wrong password";
}
}