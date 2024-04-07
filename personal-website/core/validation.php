<?php 
// بيشوف المدخلات فيها كلام ولا لا 
function requireval($input){
    if (empty($input)){
        return false;
    }
    return true;
}

// بيحسب اقل عدد للمدخلات 
function minval($input, $length){
    if (strlen($input) < $length){
        return false;
    }
    return true;
}

// بيحسب اقصى عدد للمدخلات 
function maxval($input, $length){
    if (strlen($input) > $length){
        return false;
    }
    return true;
}

function emailval($input){
    if (!filter_var($input, FILTER_VALIDATE_EMAIL)){
        return false;
    }
    return true;
}