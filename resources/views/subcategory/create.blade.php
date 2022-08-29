@extends('layouts.master')
@section('content')

<div class="card">
  <div class="card-header">subcategory Page</div>
  <div class="card-body">

      <form action="{{ url('subcategory-liste') }}" method="post">
        {!! csrf_field() !!}
          <select class="form-select" name="category_id" id="category_id">
              <option selected> select Category </option>
              @foreach ($category as $item )
                  <option value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
          </select></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
