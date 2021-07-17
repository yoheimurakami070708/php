<?php


$sex = htmlspecialchars($_GET['sex']);
$age = htmlspecialchars($_GET['age']);
$category = htmlspecialchars($_GET['category']);
$history = htmlspecialchars($_GET['history']);

$result =" ";

if($sex == "男性"　&& $age == "10代"){
  echo $result="1"
}
echo json_decode($result);

header('Content-Type: application/json; charset=utf-8');










