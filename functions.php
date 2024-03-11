<?php
session_start();

/**
 * Generates a random password containing numbers, symbols, uppercase and lowercase letters .
 *
 * @param int $number_length_password The length of the password to generate.
 * @param string  $moreCharacters Allow repetitions of one or more characters Either "on" or "off".
 * @param string|null $letters Allow use of letters Either "on" or null.
 * @param string|null $numbers Allow use of numbers Either "on" or null.
 * @param string|null $symbols Allow use of symbols Either "on" or null.
 * @return string The randomly generated password.
 */
function randomPassword($length_password, $allowRepetitions, $allowLetters, $allowNumbers, $allowSymbols)
{
    if (!is_numeric($_GET['length_password'])) {
        $_SESSION['error'] = 'You must enter a number';
        header("Location: index.php");
        exit;
    }
    $letters = ($allowLetters == "on") ? 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz' : '';
    $numbers = ($allowNumbers == "on") ? '0123456789' : '';
    $symbols = ($allowSymbols == "on") ? '!@#$%^&*()-_=+' : '';

    // Concatenate all character sets
    $all_characters = $letters . $numbers . $symbols;

    $password = '';

    if ($allowRepetitions == "on") {
        for ($i = 0; $i < $length_password; $i++) {
            $char_random = $all_characters[rand(0, strlen($all_characters) - 1)];
            $password = $password . $char_random;
        }
    } else {
        if (strlen($all_characters) < $length_password) {
            $_SESSION['error'] = 'Number of available characters is less than length password';
            header("Location: index.php");
            exit;
        }
        for ($i = 0; $i < $length_password; $i++) {
            $char_random = $all_characters[rand(0, strlen($all_characters) - 1)];
            // Check if the character has already been used
            if (!str_contains($password, $char_random)) {
                $password = $password . $char_random;
            } else {
                $i--;
            }
        }
    }

    // Shuffle the password characters 
    $password_shuffle = str_shuffle($password);
    $_SESSION['password'] = $password_shuffle;
    header("Location: welcome.php");
}
