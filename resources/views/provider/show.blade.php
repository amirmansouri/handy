@extends('layouts.master')
@section('content')


    <div class="card">
        <div class="card-header">provider Page</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Name : {{ $provider->name?? null }}</h5>
                <h5 class="card-text">Address : {{ $provider->address ?? null }}</h5>

            </div>


        </div>
    </div>
@stop
