<?php
session_start();
$_SESSION['fullname'] = $_GET['fullname'];
$_SESSION['length_password'] = $_GET['length_password'];
$_SESSION['moreCharacters'] = $_GET['moreCharacters'];
$_SESSION['letters'] = $_GET['letters'];
$_SESSION['numbers'] = $_GET['numbers'];
$_SESSION['symbols'] = $_GET['symbols'];



include_once __DIR__ . "/functions.php";

randomPassword(
    $_SESSION['length_password'],
    $_SESSION['moreCharacters'],
    $_SESSION['letters'],
    $_SESSION['numbers'],
    $_SESSION['symbols']
);
