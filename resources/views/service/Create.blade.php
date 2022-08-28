@extends('layouts.master')
@section('content')

    <div class="card">
        <div class="card-header">service Page</div>
        <div class="card-body">

            <form action="{{ url('service-liste') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" class="form-control"></br>
                <select class="form-select" aria-label="Default">
                    <option>provider liste</option>

                        @foreach($provider_name as $name)
                          <option value="1">{{$name->name}}</option>


@endforeach


                </select></br>

                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
