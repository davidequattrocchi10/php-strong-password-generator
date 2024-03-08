<?php

/**
 * Generates a random password containing numbers, symbols, uppercase and lowercase letters .
 *
 * @param int $number_length_password The length of the password to generate.
 * @return string The randomly generated password.
 */
function randomPassword($number_length_password)
{
    $uppercase = 'ABCDEFGHILMNOPQRSTUVZ';
    $lowercase = 'abcdefghilmnopqrstuvz';
    $numbers = '0123456789';
    $symbols = '!£$@%#&*';

    // Concatenate all character sets
    $all_characters = $uppercase . $lowercase . $numbers . $symbols;

    // Initialize the password variable
    $password = '';

    for ($i = 0; $i < $number_length_password; $i++) {
        $char_random = $all_characters[rand(0, strlen($all_characters) - 1)];
        $password = $password . $char_random;
    }

    // Shuffle the password characters 
    $password_shuffle = str_shuffle($password);
    echo $password_shuffle;
}
