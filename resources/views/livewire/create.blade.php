@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width: 50rem;">
                <div class="card-header">{{ __('Nuevo Post') }}</div>

                <div class="card-body">
                    <form method="HEAD" action='/store'>
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Post') }}</label>

                            <div class="col-md-4">
                                <input id="post" type="text" class="form-control @error('post') is-invalid @enderror" name="post" value="{{ old('post') }}" required autocomplete="Post" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('Body') }}</label>

                            <div class="col-md-4">
                                <textarea id="body" type="text" class="form-control @error('body') is-invalid @enderror" name="body" value="{{ old('body') }}" required autocomplete="Body"></textarea>

                                @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                
                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ingresar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection