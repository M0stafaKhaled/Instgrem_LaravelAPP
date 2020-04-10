@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-3 p-5">

            <img src="image/1v.jpg" width="200" height="200" class="rounded-circle">
        </div>

        <div class="col-9 pt-5">
            <h1>{{$user->name}} </h1>
            <div class="d-flex">
                <div class="pr-5"> posts <strong>5</strong></div>
                <div class="pr-5">followers <strong>12k</strong></div>
                <div class="pr-5">following <strong>1k</strong></div>
            </div>
            <div class="pt-4 font-weight-bold">
                Nero
            </div>
            <div>created in black clover</div>
        </div>

    </div>

    <div class="row">

        <div class="col-4">
            <img src="image/4.png" class="w-100">
        </div>

        <div class="col-4">
            <img src="image/5.jpg" class="w-100">
        </div>

        <div class="col-4">
            <img src="image/7.jpg" class="w-100">
        </div>

    </div>

</div>
@endsection