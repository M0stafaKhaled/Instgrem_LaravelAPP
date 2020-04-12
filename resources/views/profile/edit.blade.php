@extends('layouts.app')

@section('content')
<div class="container">

    <form action="/Profile/{{$user->id}}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
                <div>
                    <h1>Edit Profile</h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>

                    <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') ?? $user->profile->title}}" autocomplete="title" autofocus>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror


                    <label for="desciprion" class="col-md-4 col-form-label">Descripción</label>

                    <input id="desciprion" type="text" class="form-control{{ $errors->has('desciprion') ? ' is-invalid' : '' }}" name="description" value="{{ old('description')  ??  $user->profile->description}}" autofocus>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                    <input type="file" name="image" class="form-control-file">
                    @error('image')
                    <strong>{{$message}}</strong>
                    @enderror
                </div>
                <div class="row pt-4">
                    <button class="btn btn-primary"> Save Profile</button>
                </div>
            </div>

        </div>
    </form>

</div>
@endsection