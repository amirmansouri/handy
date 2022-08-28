@extends('layouts.master')
@section('content')

<div class="card">
  <div class="card-header">category Page</div>
  <div class="card-body">

      <form action="{{ url('category-liste/' .$category->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$category->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$category->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$category->address}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
