@extends('handyman.layout')
@section('content')

    <div class="card">
        <div class="card-header">handyman Page</div>
        <div class="card-body">

            <form action="{{ url('handyman/liste/' .$handyman->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$handyman->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$handyman->name}}" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" value="{{$handyman->email}}" class="form-control"></br>
                <input type="submit" value="edit" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
