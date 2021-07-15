<?php


$sex = post("sex");
$age = post("age");
$category = post("category");
$history = post("history");






/**
 * postをサニタイズ化して返却。値が無ければNULLを返却
 * ＠param $key string POSTのキー
 * ＠return string or null
 */
function post($key){
 if(empty($_POST[$key])){
   return NULL;
 }
if(is_array($_POST[$key])){
  return array_map("myhtmlspecialchars",$_POST[$key]);
}
return htmlspecialchars($_POST[$key]);
}


