@extends('layouts.master')
@section('content')

    <div class="card">
        <div class="card-header">user Page</div>
        <div class="card-body">

            <form action="{{ url('user-liste/' .$user->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$user->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="email" id="email" value="{{$user->email}}" class="form-control"></br>
                <input type="submit" value="edit" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
