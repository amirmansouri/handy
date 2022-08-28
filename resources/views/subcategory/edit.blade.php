@extends('layouts.master')
@section('content')

<div class="card">
  <div class="card-header">subcategory Page</div>
  <div class="card-body">

      <form action="{{ url('subcategory-liste/' .$subcategory->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$subcategory->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$subcategory->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$subcategory->address}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
