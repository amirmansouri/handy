@extends('service.layout')
@section('content')


<div class="card">
  <div class="card-header">Services Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $provider->name }}</h5>
        <p class="card-text">Address : {{ $provider->address }}</p>

  </div>

    </hr>

  </div>
</div>
