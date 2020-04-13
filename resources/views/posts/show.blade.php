@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
        <div class="col-4">
            <div>

                <div class="d-flex">
                    <div class="pr-4">
                        <img src="/storage/{{$post->user->profile->image}}" class="w-100  around-circle" style="max-width: 45px">
                    </div>

                    <div>
                        <div class="font-weight-bold">
                            <a href="/Profile/{{$post->user->id}}" class="text-dark">
                                {{$post->user->username}}
                            </a>
                            <a href="" Class="pl-4">Follow</a>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="font-weight-bold ">
                    <a href="{{$post->user->profile->profileImage()}}" class="text-dark">
                        {{$post->user->username}}
                    </a>
                </div>
                <p>{{$post->caption}}</p>
            </div>
        </div>
    </div>


</div>
@endsection