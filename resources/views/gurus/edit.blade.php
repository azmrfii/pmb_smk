@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">gurus</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Edit guru') }}
                        <a href="{{ route('gurus.index') }}" class="float-right">Back</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('gurus.update', $guru->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('nama') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                                        name="nama" value="{{ old('nama', $guru->nama) }}" required
                                        autocomplete="nama" autofocus>

                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jk"
                                    class="col-md-4 col-form-label text-md-right">{{ __('jk') }}</label>

                                <div class="col-md-6">
                                    @if ($guru->jk == 'laki-laki')
                                        <select name="jk" id="" class="form-control">
                                        <option value="laki-laki" selected>laki-laki</option>
                                        <option value="perempuan">perempuan</option>
                                        </select>
                                    @else
                                        <select name="jk" id="" class="form-control">
                                        <option value="laki-laki">laki-laki</option>
                                        <option value="perempuan" selected>perempuan</option>
                                        </select>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jabatan"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Jabatan') }}</label>

                                <div class="col-md-6">
                                    @if ($guru->jabatan == 'guru')
                                        <select name="jabatan" id="" class="form-control">
                                        <option value="guru" selected>guru</option>
                                        <option value="laboran">laboran</option>
                                        <option value="kepsek">kepsek</option>
                                        <option value="kepsek">kepsek</option>
                                    </select>
                                    @elseif ($guru->jabatan == 'laboran')
                                        <select name="jabatan" id="" class="form-control">
                                        <option value="guru">guru</option>
                                        <option value="laboran" selected>laboran</option>
                                        <option value="kepsek">kepsek</option>
                                        </select>
                                    @else 
                                        <select name="jabatan" id="" class="form-control">
                                        <option value="guru">guru</option>
                                        <option value="laboran">laboran</option>
                                        <option value="kepsek" selected>kepsek</option>
                                        </select>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="m-2 p-2">
                    <form method="POST" action="{{ route('gurus.destroy', $guru->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete {{ $guru->nama }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
