@extends('layouts.master')
@section('content')


<div class="card">
  <div class="card-header">Services Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $service->name }}</h5>
        <p class="card-text">Address : {{ $service->address }}</p>

  </div>

    </hr>

  </div>
</div>
