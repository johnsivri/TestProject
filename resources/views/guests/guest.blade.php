@extends('layouts.app')

@section('title', 'Guest Page')

@section('content')

  <!-- 100% offset -->
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <h1>100% Offset</h1>
    </div>
  </div>

  <!-- 75% offset -->
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-8">
      <h1>75% Offset</h1>
    </div>
    <div class="col-xs-6 col-sm-4">
      <h2>25% Offset</h2>
    </div>
  </div>

  <!-- 33% offset -->
  <div class="row">
    <div class="col-xs-6 col-sm-4">
      <h3>33% Offset</h3>
    </div>
    <div class="col-xs-6 col-sm-4">
      <h3>33% Offset</h3>
    </div>
    <div class="col-xs-6 col-sm-4">
      <h3>33% Offset</h3>
    </div>
  </div>

@endsection
