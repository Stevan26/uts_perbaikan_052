@extends('layouts.master')

@section('title', 'Update Data Pasien')

@section('content')
<div class="row mt-4">
    <div class="col-md-8 mx-auto">
        <div class="card shadow-sm">

            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0">Edit Data Pasien</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">No. Rekam Medis</label>
                        <input type="text" name="no_rekam_medis"
                               class="form-control"
                               value="{{ $pasien->no_rekam_medis }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Pasien</label>
                        <input type="text" name="nama_pasien"
                               class="form-control"
                               value="{{ $pasien->nama_pasien }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required>
                            <option value="Laki-laki" {{ $pasien->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ $pasien->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Umur</label>
                        <input type="number" name="umur"
                               class="form-control"
                               value="{{ $pasien->umur }}" required>
                    </div>


                    <div class="d-flex justify-content-between">
                        <a href="{{ route('pasien.index') }}"
                           class="btn btn-secondary">
                           ← Kembali
                        </a>

                        <button type="submit" class="btn btn-success">
                            Simpan Perubahan
                        </button>


                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection
