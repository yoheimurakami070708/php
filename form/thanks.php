<?php
    require_once "./data.php";
    require_once "./PHPMailer/language/phpmailer.lang-ja.php";
    require_once "./PHPMailer/src/PHPMailer.php";
    require_once "./PHPMailer/src/SMTP.php";

    use PHPMailer\PHPMailer\PHPMailer;

    if (empty($_SESSION["token"]) || empty($token) || $_SESSION["token"] !== $token) {
      //入力画面に戻す
      header("Location: ../");
      exit;
    }

    $_SESSION = [];
    setcookie("PHPSESSID","",time()-42000);
    session_destroy();

 


$template = <<<EOD
お問い合わせありがとうございました。
ご入力いただいた内容は下記の通りとなります。

ご担当者名 $name

email $email



担当の者が確認次第、折り返しご連絡致しますので今しばらくお待ちくださいませ。

==================================
会社名: 〇〇株式会社

住所： Aオフィス: 〒100-0001
東京都千代田区千代田
Bオフィス: 〒100-0002
大阪府大阪市大阪

お問い合わせ先： info@test.com

【秘密保持のお願い】
こちらのメールにお心当たりがない場合は、メールの使用、公開等をなさらず、
送信元にご連絡いただきました上で削除をお願い致します。
==================================        
EOD;

$subject = "お問い合わせありがとうございます。"; 

$mail = new PHPMailer(true);
$mail  -> CharSet = 'UTF-8';
$mail  -> isSMTP();
$mail  -> Host = 'smtp.gmail.com';
$mail  -> SMTPAuth = true;
$mail  -> Username = 'f25t30ktkt@gmail.com';
$mail  -> Password = 'ahswccoblkassxgq';
$mail  -> SMTPSecure = 'ssl';
$mail  -> Port = 465;
$mail  -> setFrom("f25t30ktkt@gmail.com", 'むらかみ　ようへい');
$mail  -> addAddress($email,$name);
$mail  -> Subject = mb_convert_encoding($subject,"UTF-8");
$mail  -> Body    = mb_convert_encoding($template, "UTF-8");
$mail  -> send();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォーム｜完了画面</title>
  <link rel="stylesheet" href="./src/css/bootstrap.min.css" />
</head>
<body>

<div class="container mx-auto mt-5">
  <p>お問い合わせありがとうございます</p>
 
  
  </div>
  
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="./src/js/bootsrap.min.js"></script>
  </body>
  </html>