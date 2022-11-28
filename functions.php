<?php
function generatePassword($desired_length)
{

    $password = '';
    $length = 0;

    while ($length < $desired_length) {
        $length += 1;
        $type = rand(1, 3);
        if ($type == 1) {
            $password .= chr(rand(33, 64)); //numeri e caratteri speciali

        } elseif ($type == 2) {
            $password .= chr(rand(65, 90)); //A->Z

        } else {
            $password .= chr(rand(97, 122)); //a->z

        }
    }
    return $password;
    echo $password;
    var_dump($password);
}
