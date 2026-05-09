<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name)) {
        $errors['name'] = 'Name is required.';
    }
    
    if (empty($email)) {
        $errors['email'] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address.';
    }
    
    if (empty($message)) {
        $errors['message'] = 'Message is required.';
    }

    if (empty($errors)) {
        header("Location: thankyou.php");
        exit();
    } else {
        $_SESSION['errors'] = $errors;
        header("Location: index.php#contact");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}