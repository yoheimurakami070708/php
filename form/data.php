<?php

$result =array(
  "sex" => htmlspecialchars($_GET['sex'],ENT_QUOTES,"utf-8"),
  "age" => htmlspecialchars($_GET['age'],ENT_QUOTES,"utf-8"),
  "category" => htmlspecialchars($_GET['category'],ENT_QUOTES,"utf-8"),
  "history" => htmlspecialchars($_GET['history'],ENT_QUOTES,"utf-8")
);



echo json_decode($result);

header('Content-Type: application/json; charset=utf-8');










