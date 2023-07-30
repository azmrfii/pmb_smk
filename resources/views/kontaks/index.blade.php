@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kontak</h1>
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
                        <form method="GET" action="{{ route('kontaks.index') }}">
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
                    @if ($kontaks->count() == 0)
                    <div>
                        <a href="{{ route('kontaks.create') }}" class="btn btn-primary mb-2">Create</a>
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
                            <th scope="col">Maps</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Hp</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kontaks as $kontak)
                            <tr>
                                <th scope="row">{{ $kontak->id }}</th>
                                <td><iframe src="{{ $kontak->map }}" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                                <td>{{ $kontak->lokasi }}</td>
                                <td>{{ $kontak->email }}</td>
                                <td>{{ $kontak->no_hp }}</td>
                                <td>
                                    <a href="{{ route('kontaks.edit', $kontak->id) }}"
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
