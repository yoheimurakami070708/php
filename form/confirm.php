<?php
  
  require_once "./data.php"

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォーム｜確認画面</title>
  <link rel="stylesheet" href="./src/css/bootstrap.min.css" />
</head>
<body>

<form method="POST" class="container mx-auto mt-5">
  <input type="hidden" name="token" value="<?php echo $token ?>">
  <div class="form-group">
    <label for="name">お名前</label>
    <p><?php echo $name ?></p>
    <input type="hidden" name="name" class="form-control" id="name" value="<?php echo $name ?>">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <p><?php echo $email ?></p>
    <input type="hidden" name="email" class="form-control" id="email" value="<?php echo $email ?>">
  </div>

  <div class="form-group">
    <label for="email">年/月/日</label>
    <p><?php echo $date ?></p>
    <input type="hidden" name="date" class="form-control" id="date" value="<?php echo $date ?>">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <p>*****************</p>
    <input type="hidden" name="password" class="form-control" id="Password" value="<?php echo $password ?>">
  </div>



  <button type="submit" name="btn" class="btn btn-secondary" value="back">戻る</button>
  <button type="submit" name="btn" class="btn btn-primary" value="send">送信</button>

</form>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="./src/js/bootsrap.min.js"></script>
<script>

  $(".btn").on("click",function(){
    const val = $(this).val();
    var url = "./thanks.php/";

    if (val == "back") {
      url = "./index.php";
    }

    $("form").attr("action",url);
    $("form").submit();

  })
</script>
</body>
</html>