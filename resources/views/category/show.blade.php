@extends('layouts.master')
@section('content')


<div class="card">
  <div class="card-header">category Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $category->name }}</h5>
        <p class="card-text">Address : {{ $category->address }}</p>

  </div>

    </hr>

  </div>
</div>
