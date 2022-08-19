@extends('layouts.master')
@section('content')


    <div class="card">
        <div class="card-header">handyman Page</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Name : {{ $handyman->name }}</h5>
                <p class="card-text">Address : {{ $handyman->address }}</p>

            </div>


        </div>
    </div>
