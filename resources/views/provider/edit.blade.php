@extends('layouts.master')
@section('content')

    <div class="card">
        <div class="card-header">provider Page</div>
        <div class="card-body">

            <form action="{{ url('provider-liste/' .$provider->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$provider->id}}" id="id" />
                <h6>  état de compte :
                    <td>
                        @if($provider->isban =='0')
                            <label class="py-2 px-3 btn-success" >provider debloqué</label>
                        @elseif($provider->isban =='1')
                            <label class="py-2 px-3 btn-danger">provider bloqué</label>
                        @endif


                    </td></h6>
                <label>Name</label></br>

                <input type="text" name="name" id="name" value="" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="email" id="email" value="" class="form-control"></br>
{{--                <label>password</label></br>--}}
{{--                <input type="password" name="password" id="password" value="" class="form-control"></br>--}}
                <div class="form-group">
{{--                    <select name="isban" class="form-control">--}}
{{--                        <option value="0">debloque</option>--}}
{{--                        <option value="1">bloque</option>--}}
{{--                    </select>--}}
                    <button type="submit" class="btn btn-primary" name="isban" value="0">noban</button>
                    <button type="submit" class="btn btn-danger" name="isban" value="1">ban</button>
                </div>
                <input type="submit" value="update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
