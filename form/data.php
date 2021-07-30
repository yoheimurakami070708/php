
<?php

// session_start();
// session_regenerate_id();

$name = post("name");
$email = post("email");
$password = post("password");
$token = post("token");
$time = post("time");
$page = post("page");
$total = post("total");



  if (isset($_POST['time']) && isset($_POST['page']) ){
    $time = $_POST['time'];
    $page = $_POST['page'];
  }
  $total = (int)$time + (int)$page;


/**
 * postをサニタイズ化して返却。値が無ければNULLを返却
 * サニタイズ化→特殊文字の無効化。セキュリティ対策。
 * array_mapは対象の全要素に対して指定した関数を適応させる。
 * ＠param $key string POSTのキー
 * ＠return string or null
 */
function post($key){
  // ポストの値がからの時
 if(empty($_POST[$key])){
  //  NULLの返却
   return NULL;
 }
if(is_array($_POST[$key])){
  return array_map("myhtmlspecialchars",$_POST[$key]);
}
return htmlspecialchars($_POST[$key]);
}


