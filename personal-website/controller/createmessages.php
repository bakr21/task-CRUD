<?php 

require_once './../core/function.php';
session_start();



$name = $_POST['name'];

$email = $_POST['email'];

$phone = $_POST['phone'];

$mess = $_POST['mess'];

// // $file = uploadFile('file');

// // $newmessage = ['name' => $name, 'email' => $email, , 'phone' => $phone, 'mess' => $mess ];

// createNewMessages($newmessage);

// $_SESSION['success'] = "message created successfully.";

// header('Location: ./../contact.php');


$newProject = ['id' => uniqid(), 'name' => $name, 'email' => $email, 'phone' => $phone, 'mess' => $mess];

createNewProject($newProject);

$_SESSION['success'] = "Project created successfully.";

header('Location: ./../contact.php');

// redirectWithMessage('location', ['key', 'value']);