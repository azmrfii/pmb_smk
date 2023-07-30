@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tentang</h1>
    </div>
    <div class="row">
        <div class="card  mx-auto">
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <form method="GET" action="{{ route('tentangs.index') }}">
                            <div class="form-row align-items-center">
                                <div class="col">
                                    <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                                        placeholder="Search">
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @if ($tentangs->count() == 0)
                    <div>
                        <a href="{{ route('tentangs.create') }}" class="btn btn-primary mb-2">Create</a>
                    </div>
                    @else      
                    <div>
                        <a href="#" class="btn btn-info mb-2">Max</a>
                    </div>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#Id</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Teks</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tentangs as $tentang)
                            <tr>
                                <th scope="row">{{ $tentang->id }}</th>
                                <td>{{ $tentang->judul }}</td>
                                <td>{{ $tentang->teks }}</td>
                                <td>
                                    <a href="{{ route('tentangs.edit', $tentang->id) }}"
                                        class="btn btn-success">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
