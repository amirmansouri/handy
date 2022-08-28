@extends('layouts.master')
@section('content')

<div class="card">
  <div class="card-header">category Page</div>
  <div class="card-body">

      <form action="{{ url('category-liste') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>detail</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
