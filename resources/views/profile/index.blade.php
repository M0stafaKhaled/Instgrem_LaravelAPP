@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-3 p-5">

            <img src="{{$user->profile->profileImage()}}" width="200" height="200" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between">

                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{$user->name}} </div>
                    <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                </div>
                @can('update',$user->profile)
                <a href="/p/create" class="d-flex justify-content-between"> Add new Post</a>
                @endcan

            </div>

            @can('update',$user->profile)
            <a href="/Profile/{{$user->id}}/edit">edite profile</a>
            @endcan
            <div class="d-flex">

                <div class="pr-5"> posts <strong>{{$user->posts->count()}} </strong></div>
                <div class="pr-5">followers <strong>{{$user->profile->followers->count()}}</strong></div>
                <div class="pr-5">following <strong>{{$user->following->count()}} </strong></div>
            </div>
            <div class="pt-4 font-weight-bold">
                {{$user->profile->title}}
            </div>
            <div>{{$user->profile->description}} </div>
        </div>
    </div>

    <div class="row">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" class="w-100">
            </a>

        </div>
        @endforeach
    </div>

</div>
@endsection