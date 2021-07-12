<?php?>
<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheetSecond.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <header>
      <h1>YONDOKO</h1>
      <p>読んどこ</p>
    </header>
    <main>
      <form id="form_test">
      <div class="status">
        <h2>Status</h2>
        <div class="statusContainer">
          <!-- 題名・時間・ページ数・冊数・メモの記入欄を出力 -->
          <!-- 時間 -->
          <!-- 分単位で入力 -->
          <!-- １分１ポイント -->
          <!-- ページ数 -->
          <!-- １ページ１ポイント -->
          <!-- 冊数 -->
          <!-- 1冊５ポイント -->
          <!-- 項目全て入力したらボーナス１０ポイント -->

          <!-- 階層 -->
          <!-- ０〜1200はダメ人間 -->
          <!-- 1201〜4000はたまに読みます -->
          <!-- 4001〜8000は読書家 -->
          <!-- 8001〜12000は本の虫 -->
          <!-- それ以降は歩く図書館 -->
          <!-- 条件分岐php基礎文法１４ -->


          
         <div class="scole">
           <h3>累計時間</h3>
           <div id="result"></div>
         </div>
          <div class="statusSecond">
           <h3>カレンダー</h3>
           <canvas id="myLineChart"></canvas>
          </div>
          </div>
        </div>
        <div class="saving">
          <h2>Saving</h2>
          <!-- 題名・時間・ページ数・冊数・メモの記入欄 -->
          <!-- 記入し送信された値をstatusContainerに送る -->

            <div class="savingContainer">
              <div class="form-group">
                <p>
                  <input type="text" name="name" id="name">
                  <input type="button" id="greet" value="Greet!">
                </p>
              </div>
              
       
            </div>
          </div>
        </form>
        </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script>
        $(function() {
            $('#greet').click(function() {
                
                $.get('fuga.php', {
                    name: $('#name').val()
                }, function(data) {
                    $('#result').html(data.message + '(' + data.length + ')');
                });

            });

        });
    </script>
    

 
  </body>
</html>