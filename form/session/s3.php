<?php

session_start();

//セッションの中身を削除
$_SESSION = [];

//Cookieを削除 名前, 値, 有効期限
setcookie("PHPSEEEID","",time()-42000);

//セッション自体の削除
session_destroy();

echo "値を削除しました！";


