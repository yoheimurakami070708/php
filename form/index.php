<?php
  require_once "./data.php";

  //ワンタイムトークンの発行
  $token = sha1(uniqid(mt_rand(),true));
  $_SESSION["token"] = $token;

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新規会員登録</title>
  <link rel="stylesheet" href="./src/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./src/css/stylesheet.css" />
</head>
<body>
 <header>
  <h1>YONDOKO</h1>
  <p>読んどこ</p>
 </header>
 <div class="container">
  <h2>新規会員登録</h2>
    <form method="POST" action="./confirm.php" class="container mx-auto mt-5">
      <input type="hidden" id="token" name="token" value="<?php echo $token ?>">
      <div class="form-group">
        <label for="name">お名前</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="テスト太郎" value="<?php echo $name ?>">
        <p id="err_name"></p>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="info@test.jp" value="<?php echo $email ?>">
        <p id="err_email"></p>
      </div>

      <div class="form-group">
        <label for="date">年/月/日</label>
        <input type="date" name="date" class="form-control" id="date" placeholder="年/月/日" value="<?php echo $date ?>">
        <p id="err_date"></p>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="password" value="<?php echo $password ?>">
        <p id="err_password"></p>
      </div>


      
      <button type="submit" name="btn" class="btn  bg-info text-white formBtn">登録</button>

    </form>
 </div>



  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="./src/js/bootsrap.min.js"></script>
  <script>
    $(".btn").on("click",function(event){
        event.preventDefault() //同期イベントを中断
        $("[id^=err_]").text("");
        
    

        $.ajax({
          //送信先
          url:'./validation.php',
          //送信方法
          type:'POST',
          //データの種類
          dataType:'json',
          //データ
          data: {
            "token":$("#token").val(),
            "name":$("#name").val(),
            "email":$("#email").val(),
            "date":$("#date").val(),
            "password":$("#password").val(),
       
          }
        })
        .done((data) => {
            if (data == 1) {
              //確認画面へ遷移する
              $("form").attr("action","./confirm.php");
              $("form").submit();
            } else {
              $.each(data,function(key,val) {
                let id = "#err_" + key
                $(id).text(val);
              })
            }
        })
        .fail((data) => {
            alert("失敗")
        })

    });
  </script>
</body>

</html>