@extends('layouts.master')

@section( 'content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4>information de  profile</h4>
                        <h7>votre role est : {{Auth::user()->role_as}}</h7>
                        <hr>

                        <form action="{{url('my-profile-update')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">prenom</label>
                                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">nom</label>
                                        <input type="text" name="lastname" class="form-control" value="{{$user->lastname}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">email</label>
                                        <input type="text" name="email" class="form-control"  readonly value="{{$user->email}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Adresse 1 </label>
                                        <input type="text" name="adresse1" class="form-control" value="{{$user->adresse1}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Adresse 2</label>
                                        <input type="text" name="adresse2" class="form-control" value="{{$user->adresse2}}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">country </label>
                                        <input type="text" name="country" class="form-control" value="{{$user->country}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">state </label>
                                        <input type="text" name="state" class="form-control" value="{{$user->state}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">city </label>
                                        <input type="text" name="city" class="form-control" value="{{$user->city}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">zip code </label>
                                        <input type="text" name="code_zip"  class="form-control" value="{{$user->code_zip}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">num </label>
                                        <input type="text" name="number" class="form-control" value="{{$user->number}}">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group" >
                                    <button type="submit" class="btn btn-primary">mise a jour profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
