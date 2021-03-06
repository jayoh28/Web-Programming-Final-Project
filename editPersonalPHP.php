<?php

include('database.php');
if (!isset($_SESSION)) {
    session_start();
}

$userID = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT);

$user_id = $_SESSION['user_id'];

$first = $_POST['first'];
$last = $_POST['last'];
$phone = $_POST['phone'];

if (!empty($first)) {
    if (!preg_match("/^[a-zA-Z]+$/", $first)) {
        $first_error = "Please input a valid first name.";
    } else {
        $query = "UPDATE user_info SET first = '$first' WHERE id = $user_id";
        $db->exec($query);
    }
}
if (!empty($last)) {
    if (!preg_match("/^[a-zA-Z]+$/", $last)) {
        $last_error = "Please input a valid last name.";
    } else {
        $query = "UPDATE user_info SET last = '$last' WHERE id = $user_id";
        $db->exec($query);
    }
}
if (!empty($phone)) {
    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        $phone_error = "Please input a valid phone number.";
    } else {
        $query = "UPDATE user_info SET phone = '$phone' WHERE id = $user_id";
        $db->exec($query);
    }
}

if (empty($first_error) && empty($last_error) && empty($phone_error)) {
    include('myAccount.php');
} else {
    include("editPersonal.php");
}
