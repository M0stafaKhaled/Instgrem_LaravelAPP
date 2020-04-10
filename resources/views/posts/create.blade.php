@extends('layouts.app')

@section('content')
<div class="container">

    <form action="">
        <div class="row">
            <div class="col-8 offset-2">
                <div>
                    <h1>Add new post</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                    <input id="caption" type="caption" class="form-control @error('caption') is-invalid @enderror" name="caption">
                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">image Caption</label>

                    <input type="file" class="form-control-file" id="image" name="image">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div class="row pt-4">
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>

        </div>
    </form>

</div>
@endsection