@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Jurusan</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Create Jurusan') }}
                        <a href="{{ route('jurusans.index') }}" class="float-right">Back</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('jurusans.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="jurusan" class="col-md-4 col-form-label text-md-right">{{ __('Jurusan') }}</label>

                                <div class="col-md-6">
                                    <input id="jurusan" type="text" class="form-control @error('jurusan') is-invalid @enderror"
                                        name="jurusan" value="{{ old('jurusan') }}" required autocomplete="jurusan" autofocus>

                                    @error('jurusan')
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

                            <div class="form-group row">
                                <label for="icon" class="col-md-4 col-form-label text-md-right">{{ __('Icon') }}</label>

                                <div class="col-md-6">
                                    <input id="icon" type="text" class="form-control @error('icon') is-invalid @enderror"
                                        name="icon" value="{{ old('icon') }}" required autocomplete="icon" autofocus placeholder="Icon class from fontawesome">

                                    @error('icon')
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
