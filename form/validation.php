<?php

require_once "data.php";

if (empty($_SESSION["token"]) || empty($token) || $_SESSION["token"] !== $token) {
    return false;
}

$error = [];

if (empty($name)) {
    $error["name"] = "名前を入力してください。";
}

if (empty($email)) {
    $error["email"] = "Emailを入力してください。";
} else if (!empty($email) && ! filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $error["email"] = "Emailを正しく入力してください。";
}
if (empty($date)) {
    $error["date"] = "生年月日を入力してください。";
}

if (empty($password)) {
    $error["password"] = "パスワードを入力してください。";
}



if (empty($error)) {
    echo true;
} else {
    echo json_encode($error);
}
