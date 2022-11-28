<?php
function generateRandomPassword($desired_length)
{

    $password = '';

    for ($length = 0; $length < $desired_length; $length++) {
        $password .= chr(rand(32, 126));
    }
    return $password;
}
