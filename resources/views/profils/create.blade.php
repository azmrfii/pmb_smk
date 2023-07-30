@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Create Profile') }}
                        <a href="{{ route('profils.index') }}" class="float-right">Back</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('profils.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Judul') }}</label>

                                <div class="col-md-6">
                                    <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror"
                                        name="judul" value="{{ old('judul') }}" required autocomplete="judul" autofocus>

                                    @error('judul')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="teks" class="col-md-4 col-form-label text-md-right">{{ __('Teks') }}</label>

                                <div class="col-md-6">
                                    <textarea name="teks" id="teks" cols="30" rows="10" 
                                    class="form-control @error('teks') is-invalid @enderror"
                                    value="{{ old('teks') }}" required autocomplete="teks" autofocus></textarea>

                                    @error('teks')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Store') }}
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
