@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Guru</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Create Guru') }}
                        <a href="{{ route('gurus.index') }}" class="float-right">Back</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('gurus.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                                        name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jk"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>

                                <div class="col-md-6">
                                    <select name="jk" id="jk" class="form-control" aria-label="Default select example">
                                        <option value="laki-laki">laki-laki</option>
                                        <option value="perempuan">perempuan</option>
                                      </select>
                                    {{-- <select name="jk" class="form-control" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        @foreach ($gurus as $guru)
                                            <option value="{{ $guru->id }}">{{ $guru->jk }}</option>
                                        @endforeach
                                    </select> --}}
                                    @error('jk')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="jabatan"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Jabatan') }}</label>

                                <div class="col-md-6">
                                    <select name="jabatan" class="form-control" aria-label="Default select example">
                                        <option value="laboran">laboran</option>
                                        <option value="guru">guru</option>
                                        <option value="kepsek">kepsek</option>
                                      </select>
                                    {{-- <select name="jabatan" class="form-control" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        @foreach ($gurus as $guru)
                                            <option value="{{ $guru->id }}">{{ $guru->jabatan }}</option>
                                        @endforeach
                                    </select> --}}
                                    @error('jabatan')
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
