@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kontak</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Create Kontak') }}
                        <a href="{{ route('kontaks.index') }}" class="float-right">Back</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('kontaks.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="map" class="col-md-4 col-form-label text-md-right">{{ __('map') }}</label>

                                <div class="col-md-6">
                                    <input id="map" type="url" class="form-control @error('map') is-invalid @enderror"
                                        name="map" value="{{ old('map') }}" required autocomplete="map" autofocus>

                                    @error('map')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lokasi" class="col-md-4 col-form-label text-md-right">{{ __('lokasi') }}</label>

                                <div class="col-md-6">
                                    <textarea name="lokasi" id="lokasi" cols="30" rows="10" 
                                    class="form-control @error('lokasi') is-invalid @enderror"
                                    value="{{ old('lokasi') }}" required autocomplete="lokasi" autofocus></textarea>

                                    @error('lokasi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_hp" class="col-md-4 col-form-label text-md-right">{{ __('No Hp') }}</label>

                                <div class="col-md-6">
                                    <input id="no_hp" type="number" class="form-control @error('no_hp') is-invalid @enderror"
                                        name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp" autofocus>

                                    @error('no_hp')
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
