<?php

session_start();

$updated = false;

// $user['name'] = $_SESSION['name'];
// $user['age'] = $_SESSION['age'];
// $user['username'] = $_SESSION['username'];
// $user['password'] = $_SESSION['password'];

foreach ($_SESSION['details'] as $user) {

    $user['name'] = $_POST['name'];
    $user['age'] = $_POST['age'];
    $user['username'] = $_POST['username'];
    $user['password'] = $_POST['password'];

    $_SESSION['name'] = $user['name'];
    $_SESSION['age'] = $user['age'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['password'] = $user['password'];

    // $_SESSION['name'] = $_POST['name'];
    // $_SESSION['age'] = $_POST['age'];
    // $_SESSION['username'] = $_POST['username'];
    // $_SESSION['password'] = $_POST['password'];

    $updated = true;
}

if ($updated) {
    header("Location: edit.php");
} else {
    echo "Error updating details.";
}
