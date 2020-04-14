@extends('layouts.app')

@section('content')
<div class="container">

    @foreach($posts as $post)

    <div class="row">
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
                        </div>

                    </div>
                </div>
                <hr>
                <div class="font-weight-bold ">
                    <a href="{{$post->user->profile->profileImage()}}" class="text-dark">
                    </a>
                </div>
                <p>{{$post->caption}}</p>

            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/Profile/{{$post->user->id}}">
                <img src="/storage/{{$post->image}}" class="w-100">
            </a>
        </div>
    </div>

    @endforeach
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12">
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection