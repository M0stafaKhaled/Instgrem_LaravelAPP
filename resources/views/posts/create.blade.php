@extends('layouts.app')

@section('content')
<div class="container">

    <form action="/p" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div>
                    <h1>Add new post</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                    <input id="caption" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>
                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row">
                    <input type="file" name="image" class="form-control-file">
                    @error('image')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="row pt-4">
                    <button class="btn btn-primary"> Add new post</button>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection