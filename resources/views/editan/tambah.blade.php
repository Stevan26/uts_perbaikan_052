 @extends('layouts.master')
 @section('title', 'Tambah Pasien')
 @section('content')
     <div class="row mt-4">
         <div class="col-md-8 mx-auto">
             <div class="card shadow-sm">
                 <div class="card-header bg-primary text-white">
                     <h4 class="mb-0">Tambah Pasien Baru</h4>
                 </div>
                 <div class="card-body">
                     <!-- Action mengarah ke URL proses penyimpanan -->
                     <form action="/pasien" method="POST">

                         @csrf <!-- WAJIB ADA UNTUK KEAMANAN LARAVEL! -->

                         <div class="mb-3">
                             <label class="form-label">Nomor Rekam Medis</label>
                             <input type="text" name="no_rekam_medis" class="form-control" required>
                         </div>

                          <div class="mb-3">
                             <label class="form-label">Nama Pasien</label>
                             <input type="text" name="nama_pasien" class="form-control" required>
                         </div>

                          <div class="mb-3">
                             <label class="form-label">Jenis Kelamin</label>
                             <select name="jenis_kelamin" class="form-control" required>
                                 <option value="">Pilih Jenis Kelamin</option>
                                 <option value="Laki-laki">Laki-laki</option>
                                 <option value="Perempuan">Perempuan</option>
                             </select>
                         </div>

                          <div class="mb-3">
                             <label class="form-label">Umur</label>
                             <input type="text" name="umur" class="form-control" required>
                         </div>



                         <button type="submit" class="btn btn-success">Simpan Data</button>
                         <a href="/pasien" class="btn btn-secondary">Batal / Kembali</a>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 @endsection
