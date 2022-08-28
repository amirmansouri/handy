@extends('layouts.master')
@section('content')


<div class="card">
  <div class="card-header">subcategory Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $subcategory->name }}</h5>
        <p class="card-text">Address : {{ $subcategory->address }}</p>

  </div>

    </hr>

  </div>
</div>
