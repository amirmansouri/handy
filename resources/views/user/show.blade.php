@extends('layouts.master')
@section('content')


    <div class="card">
        <div class="card-header">user Page</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Name : {{ $user->name }}</h5>
                <p class="card-text">Address : {{ $user->address }}</p>

            </div>

        </div>
    </div>
