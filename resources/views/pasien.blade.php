@extends('layouts.master')
@section('title', 'Daftar Pasien')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-dark">Daftar Pasien</h2>

        <a href="{{route('pasien.create')}}" class="btn btn-success shadow-sm">
            <i class="bi bi-plus-lg"></i> + Tambah Pasien
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @foreach ($data as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title text-primary fw-bold">{{ $item->no_rekam_medis }}</h5>
                        <hr>
                        <p class="card-text mb-1"><strong>Nama pasien:</strong> {{ $item->nama_pasien}}</p>
                        <p class="card-text mb-1"><strong>jenis kelamin:</strong> {{ $item->jenis_kelamin }}</p>
                        <p class="card-text mb-1"><strong>umur:</strong> {{ $item->umur }}</p>

                        </p>

                        <div class="d-grid gap-2">


                            <div class="d-flex justify-content-between mt-2">
                                <a href="{{route('pasien.edit',$item->id)}}" class="btn btn-warning btn-sm text-white" style="width: 48%;">
                                    Edit
                                </a>

                                <form action="{{ route('pasien.destroy', $item->id) }}" method="POST"
                                      style="width: 48%;"
                                      onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm w-100">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
