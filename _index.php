<?php
  require_once "./data.php";
?>


<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
　　<link rel="stylesheet" href="stylesheet.css">

    <title>オリジナルサイト</title>
  </head>
  <body>
    <header>

<!-- ナビゲーションバー -->    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="#">Menu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <!-- ドロップダウンタイプ -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Side Menu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">最初の１冊</a>
              <a class="dropdown-item" href="#">要約チャンネル</a>
              <a class="dropdown-item" href="#">読書アイテム</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Join</a>
          </li>
        </ul>
      </div>
    </nav>
      <div class="title">
        <div class="firstTitle">
          <h1>YONDOKO</h1>
          <p class="subTitle md-m-10">読んどこ</p>
        </div>
        <div class="secondTitle">
          <p>習慣×読書＝最高の自己投資</p>
        </div>
      </div>
    </header>
    <main>
      <!-- ナビたぶ -->
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
          <a class="nav-item nav-link" id="nav-first-tab" data-toggle="tab" href="#nav-first" role="tab" aria-controls="nav-first" aria-selected="false">最初の１冊</a>
          <a class="nav-item nav-link" id="nav-channel-tab" data-toggle="tab" href="#nav-channel" role="tab" aria-controls="nav-channel" aria-selected="false">要約チャンネル</a>
          <a class="nav-item nav-link" id="nav-item-tab" data-toggle="tab" href="#nav-item" role="tab" aria-controls="nav-irem" aria-selected="false">読書セット</a>
        </div>
      </nav>
      <!-- タブ -->
      <div class="tab-content" id="nav-tabContent">
        <!-- ホームタブ -->
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="container d-md-flex wrap">
            <div class="containerText">
              <h2>①本を読む</h2>
              <img src="images/container1.png" alt="本を読む人">
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
            <div class="containerText center">
                <h2>②記録</h2>
                <img src="images/container2.png" alt="メモ">
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
            <div class="containerText">
              <h2>③レベルアップ</h2>
              <img src="images/container3.png" alt="階段">
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
          </div>
          <div class="about">
            <h2><a id="about">About</a></h2>
            <div class="mb-5 row">
              <div class="col-sm-7">
                <img src="images/about.png" class="w-100 rounded-circle">
              </div>
              <div class="col-sm-5">
                <h3>読書とは</h3>
                <p class="p_scroll">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
            </div>
          </div>
          <div class="wrap　function">
           <h2 id="title_scroll" class="text-center"><a>Function</a></h2>
            <div class="container">
              <div class="mb-5 row">
                <div class="col-sm-8 f1_scroll">
                  <h3>カレンダー機能</h3>
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <div class="col-sm-4">
                  <img src="images/function1.png" class="w-100 rounded-circle">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8 order-sm-2 f2_scroll">
                  <h3>グラフで進捗管理</h3>
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <div class="col-sm-4 order-sm-1">
                  <img src="images/function2.png" class="w-100 rounded-circle">
                </div>
              </div>
            </div>
          </div>
          <div class="login"> 
           <h2><a class="loginHead">Login</a></h2>
           <p class="firstSentence">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
           <p class="secondSentence">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
           <button type="submit" name="btn" class="btn  bg-info text-white formBtn">ログイン</button>
           <p class="thirdSentence">新規登録はこちら←</p>
          </div>
        </div>
        <!-- 最初の１冊 -->
        <div class="tab-pane fade" id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab">
          <h2>First reading</h2>
            <p class="mx-auto" style="max-width: 600px;">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            <form action="" method="POST" name="firstReading">
              <div class="form-group mx-auto" style="max-width: 400px;"　id="sex">
                <label for="inputState">性別を選択してください</label>
                <select id="inputState" class="form-control" name="sex">
                  <option selected value="男性">男性</option>
                  <option　value="女性">女性</option>
                  <option　value="その他">その他</option>
                </select>
              </div>
              <div class="form-group mx-auto" style="max-width: 400px;" id="age">
                <label for="inputState">年齢を選択してください</label>
                <select id="inputState" class="form-control" name="age">
                  <option selected>10代</option>
                  <option>20代</option>
                  <option>30代</option>
                  <option>40代</option>
                  <option>50代</option>
                </select>
              </div>
              <div class="form-group mx-auto" style="max-width: 400px;" id="category">
                <label for="inputState">好きなジャンルを選択してください</label>
                <select id="inputState" class="form-control" name="category">
                  <option selected>ビジネス</option>
                  <option>お金</option>
                  <option>健康</option>
                  <option>自己啓発</option>
                </select>
              </div>
              <div class="form-group mx-auto" style="max-width: 400px;" id="history">
                <label for="inputState">読書歴を教えてください</label>
                <select id="inputState" class="form-control" name="history">
                  <option selected>1年未満</option>
                  <option>1〜3年</option>
                  <option>3年以上</option>
                </select>
              </div>
              <button type="submit" class="btn btn-info" id="button1">Go</button>
            </form>
        </div>
        <div class="tab-pane fade" id="nav-channel" role="tabpanel" aria-labelledby="nav-channel-tab">
          <div>
            <h2>youtube Channel</h2>
           <p class="firstSentence">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
           <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters ">
              <div class="col-md-4">
                <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="row no-gutters">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="col-md-4">
                <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
              </div>
            </div>
          </div>
          </div>
        </div>
        <!-- 読書セット -->
        <div class="tab-pane fade" id="nav-item" role="tabpanel" aria-labelledby="nav-item-tab">
          <div class="card-group">
            <div class="card">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- スライドメニュー -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="carousel-caption d-none d-md-block">
              <div class="containerText">
                <h2>最初の１冊</h2>
                <img src="images/menu1.png" alt="本を読む人">
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
            </div>
            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
              xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
              aria-label="Placeholder: First slide">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#777" />
            </svg>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
              <div class="containerText center">
                <h2>要約サイト</h2>
                <img src="images/menu2.png" alt="youtube">
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
            </div>
            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
              xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
              aria-label="Placeholder: Second slide">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#666" />
            </svg>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
              <div class="containerText center">
                <h2>読書セット</h2>
                <img src="images/menu3.png" alt="道具">
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
            </div>
            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
              xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
              aria-label="Placeholder: Third slide">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#555" />
            </svg>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!-- <div class="container d-md-flex wrap　menu">
        <div class="containerText">
          <h2>最初の１冊</h2>
          <img src="images/menu1.png" alt="本を読む人">
          <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
        <div class="containerText center">
            <h2>要約サイト</h2>
            <img src="images/menu2.png" alt="youtube">
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
        <div class="containerText">
          <h2>読書セット</h2>
          <img src="images/menu3.png" alt="道具">
          <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
      </div> -->
  
    </main>
    <div class="card bg-info text-white">
      <svg class="bd-placeholder-img bd-placeholder-img-lg card-img" width="100%" height="270" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Card image"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Card image</text></svg>
      <div class="card-img-overlay bg-info">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text">Last updated 3 mins ago</p>
      </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="jquery.js"></script>
    <script src="main.js"></script>
    <script>
      $(".btn").on("click",function(event){
        event.preventDefault() 
// ajaxはHTMLの一部を追加で読み込む通信法
        $.ajax({
          //送信先
          url:'#',
          //送信方法
          type:'POST',
          //データの種類
          dataType:'json',
          //データ
          data: {
            "sex":$("#sex").val(),
            "age":$("#age").val(),
            "category":$("#category").val(),
            "history":$("#history").val(),
          }
        })
        .done((data) => {
        
        })
        .fail((data) => {
            alert("失敗")
        })

    });
    </script>
  </body>
  </html>