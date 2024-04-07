<?php
session_start();
include ("../core/function.php");
include ("../core/Validation.php");
$errorlog = [];

// التحقق مما إذا كان الطلب POST ومدخلات النموذج موجودة
if (checkRequestMethod('POST') && checkPostInput('email')) {
    foreach ($_POST as $key => $value) {
        $$key = sanitizeinput($value);
    }
    
    // التحقق من صحة بيانات تسجيل الدخول
    if (!requireval($email)) {
        $errorlog[] = "email is required";
    } elseif (!emailval($email)) {
        $errorlog[] = "Invalid email format";
    }

    if (!requireval($pass)) {
        $errorlog[] = "password is required";
    } elseif (!minval($pass, 7)) {
        $errorlog[] = "Password must be at least 7 characters long";
    } elseif (!maxval($pass, 25)) {
        $errorlog[] = "Password must be at most 25 characters long";
    }
    
    if (empty($errorlog)) {
        // قراءة بيانات المستخدمين من ملف JSON
        $users_file_path = "../data/users.json";
        // 1- حنفتخ الملف 
        
        $users_data = file_get_contents($users_file_path);
        $users = json_decode($users_data, true);
        
        // التحقق من مطابقة بيانات تسجيل الدخول
        $login_successful = false;
        foreach ($users as $user) { 
            if ($user["email"] == $email && $user["pass"] == $pass) {
                // تسجيل الدخول ناجح
                $login_successful = true;
                $_SESSION['auth']['email'] = $email;
                $_SESSION['auth']['name']  = $user['name'];
                $_SESSION['auth']['pass'] = $pass;
                redirect("../index.php");
                die;
            }
        }
        if (!$login_successful) {
            // خطأ في بيانات تسجيل الدخول
            $_SESSION["errors"] = ["Invalid email or password"];
            redirect("../loginadmin.php");
            die;
        }
    } else {
        // يوجد أخطاء في مدخلات تسجيل الدخول
        $_SESSION['errors'] = $errorlog;
        redirect("../loginadmin.php");
        die;
    }
} else {
    echo "=>> NO Request method :)";
}
?>
