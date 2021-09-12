@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/home.blade.css')}}">
<div class="container">
  <div class="row justify-content-center">
    <header>
      <div class="title">
        <div class="firstTitle">
          <h1>MYYONDOYO</h1>
          <p class="subTitle md-m-10">まい読んどこ</p>
        </div>
        <div class="secondTitle">
          <p>習慣×読書＝最高の自己投資</p>
        </div>
      </div>
    </header>
  </div>
  <main>
    <h2>Status</h2>
    <div class="row justify-content-center">
      <div class="card">
        <div class="card-header">
          ユーザー情報
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <dt>ユーザー名：</dt>
            <dd v-pre>{{ Auth::user()->name }}</dd>
          </li>
          <li class="list-group-item">
            <dt>スコア</dt>
            <dd>
              @isset($scores)
              {{$sum}}
              @endif
            </dd>
          </li>
          <li class="list-group-item">
            <dt>レベル</dt>
            <dd>
              @isset($scores)
              {{$level}}
              @endif
            </dd>
          </li>
        </ul>
      </div>
      <div class="">
        <h3>カレンダー機能</h3>
        <canvas id="my_chart">
          Canvas not supported...
        </canvas>
      </div>
    </div>
    <div class="saving">
      <h2>Saving</h2>
      <!-- 題名・時間・ページ数・冊数・メモの記入欄 -->
      <!-- 記入し送信された値をstatusContainerに送る -->
      @include('common.errors')
      <div class="savingContainer container mx-auto mt-5" style="max-width: 400px;">
        　　<form method="POST" action="{{ route('home.store') }}">
          @csrf
          <div class="form-group">
            <label for="title">題名</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="テスト太郎">
            @if($errors->has('title'))
            <div class="text-danger">
              {{$errors->first('title')}}
            </div>
            @endif
          </div>
          <div class="form-group">
            <label for="time">時間</label>
            <input type="text" name="time" class="form-control" id="time" placeholder="分単位で記入してください" value="">
            @if($errors->has('time'))
            <div class="text-danger">
              {{$errors->first('time')}}
            </div>
            @endif
          </div>
          <div class="form-group">
            <label for="page">ページ数</label>
            <input type="page" name="page" class="form-control" id="page" placeholder="読んだページ数を記入してください" value="">
            @if($errors->has('page'))
            <div class="text-danger">
              {{$errors->first('page')}}
            </div>
            @endif
          </div>
          <div class="form-group">
            <label for="day">日付</label>
            <input type="date" name="day" class="form-control
            " id="day" placeholder="日付を入力してください">
            @if($errors->has('day'))
            <div class="text-danger">
              {{$errors->first('day')}}
            </div>
            @endif
          </div>
          <div class="form-group">
            <label for="comment">メモ</label>
            <input type="textarea" name="comment" class="form-control" id="comment" placeholder="ひとこと">
            @if($errors->has('comment'))
            <div class="text-danger">
              {{$errors->first('comment')}}
            </div>
            @endif
          </div>
          <button type="submit" name="btn" class="btn btn-info mx-auto container my-3" style="max-width: 100px;">Submit</button>
        </form>
      </div>
      @if (count($scores) > 0)
      <div class="panel panel-default">
        <div class="panel-heading">Record</div>
        <div class="panel-body">
          <table class="table table-striped task-table">
            <!-- テーブルヘッダ -->
            <thead>
              <th>タスク</th>
              <th>時間（分）</th>
              <th>ページ数</th>
              <th>日付</th>
              <th>メモ</th>
            </thead>
            <!-- テーブル本体 -->
            <tbody>
              @foreach ($scores as $score)
              <tr>
                <td class="table-text">
                  <div>{{ $score->title }}</div>
                </td>
                <td class="table-text">
                  <div>{{ $score->time }}</div>
                </td>
                <td class="table-text">
                  <div>{{ $score->page }}</div>
                </td>
                <td class="table-text">
                  <div>{{ $score->day }}</div>
                </td>
                <td class="table-text">
                  <div>{{ $score->comment }}</div>
                </td>
                <!-- 詳細ボタン -->
                <td>
                  <form action="{{ route('home.edit',$score->id) }}" method="GET">
                    @csrf
                    <button type="submit" class="btn btn-primary">更新</button>
                  </form>
                </td>
                <td>
                  <!-- 削除ボタン -->
                  <form action="{{ route('home.destroy',$score->id) }}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">削除</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      @endif
  </main>
</div>
<div class="card bg-info text-white">
  <svg class="bd-placeholder-img bd-placeholder-img-lg card-img" width="100%" height="270" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Card image">
    <title>Placeholder</title>
    <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Card image</text>
  </svg>
  <div class="card-img-overlay bg-info">
    <h5 class="card-title">Writen by YOHEI MURAKAMI</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">portfolio</p>
  </div>
</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script>
  let day1 = moment().add('days', 1).format("YYYY年MM月DD日");
  let day2 = moment().add('days', 2).format("YYYY年MM月DD日");
  let day3 = moment().add('days', 3).format("YYYY年MM月DD日");
  let day4 = moment().add('days', 4).format("YYYY年MM月DD日");

  const ctx = document.getElementById('my_chart');
  const chart_cv = new Chart(ctx, {
    type: 'line', // グラフの種類
    data: {
      datasets: [{
        label: '経験値',
        data: [0, 120, 300, 200, 210]
      }],
      labels: ['', day1, day2, day3, day4],
    }
  })
</script>
<script src="{{ asset('/js/home.blade.js')}}"></script>
@endsection