@extends('layouts.master')
@section('content')

    <div class="card">
        <div class="card-header">subcategory Page</div>
        <div class="card-body">

            <form action="{{ url('service-liste/' .$service->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$service->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$service->name}}" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" value="{{$service->address}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
