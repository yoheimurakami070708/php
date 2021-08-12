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
              </dd>
          </li>
          <li class="list-group-item">
            <dt>レベル</dt>
            <dd?>
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
    <div class="saving">
      <h2>Saving</h2>
      <!-- 題名・時間・ページ数・冊数・メモの記入欄 -->
      <!-- 記入し送信された値をstatusContainerに送る -->

      <div class="savingContainer container mx-auto mt-5" style="max-width: 400px;">
        　　<form method="post" action="{{route('scores')}}">
          @csrf
          <div class="form-group">
            <label for="name">題名</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="テスト太郎">
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
            <label for="book">冊数</label>
            <input type="book" name="book" class="form-control" id="book" placeholder="読んだ冊数を記入してください">
          </div>
          <button type="submit" name="btn" class="btn btn-info mx-auto" style="max-width: 100px;">Submit</button>
        </form>
        @isset($scores)
          @foreach($scores as $score)
            <dd> {{$score}} </dd>
          @endforeach
        @endif
      </div>
    </div>
  </main>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
  <script>
    (function() {
      'use strict';

      var type = 'line';

      var data = {
        labels: [2010, 2011, 2012, 2013],
        datasets: [{
          label: '経験値',
          data: [120, 300, 200, 210]
        }, ]
      };

      var options;
      var ctx = document.getElementById('my_chart').getContext('2d');
      var myChart = new Chart(ctx, {
        type: type,
        data: data,
        options: options
      });
    })();
  </script>
@endsection