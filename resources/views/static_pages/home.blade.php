<!-- 静态页面主页 -->
@extends('layouts.default')

@section('title','主页')
@section('content')

<div class="jumbotron">
  <h1>WELCOME TO MY HOURSE</h1>
  <p class="lead">this is a static page in laravel</p>
  <p>all will start in here</p>
  <p><a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="buttton">现在注册</a></p>
</div>


@stop

