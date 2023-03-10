@extends('layouts.produk')
<nav class="navbar container-fluid mt-4">
  <div class="row container d-flex">
    <div class="logo" style="">
      <a href="/" style="display: flex; align-items: center; text-decoration: none;">
        <img src="/img/logo-dv.png" alt="" width="60" />
        <p style="font-weight: bold; font-size: 22px; padding-top: 20px;"><span style="color: #2B3467;">Deal</span><span style="color: #FF8B13;">Vo</span></p>
      </a>
    </div>
  </div>
</nav>
{{-- 'nama', 'email', 'kelas', 'nomor_telepon', 'alamat' --}}
@section('content')
{{-- @include('partials.navbar') --}}
<div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h3 class="text-center mb-4 fw-bold">Formulir Pengiriman</h3>
            <form action="{{route('user.pengiriman')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Barang</label>
                  <input type="text" class="form-control @error('nama_barang') is-invalid @enderror"  id="nama" placeholder="Masukkan Nama Barang Anda" name="nama_barang" value="{{$clothing->title}}">
                  @error('nama_barang')
                      <div class="alert alert-danger mt-2">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Harga</label>
                  <input type="text" class="form-control @error('harga') is-invalid @enderror"  id="harga" placeholder="Masukkan Harga Barang Anda" name="harga" value="{{$clothing->harga}}">
                  <input type="text" class="form-control"  id="clothing_telepon" name="clothing_telepon" value="{{$clothing->nomor_telepon}}" hidden>
                  @error('harga')
                      <div class="alert alert-danger mt-2">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror"  id="nama" placeholder="Masukkan Nama Lengkap Anda" name="nama">
                @error('nama')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" placeholder="Masukkan Kelas Lengkap Anda" name="kelas">
                @error('kelas')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Alamat Email Anda" name="email">
                @error('email')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="tel" class="form-label">Nomor Telepon</label>
                <input type="tel" class="form-control @error('nomor_telepon') is-invalid @enderror" id="tel" placeholder="Masukkan Nomor Telepon Anda" name="nomor_telepon">
                @error('nomor_telepon')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="5" placeholder="Masukkan Alamat Pengiriman Anda">{{ old('alamat') }}</textarea>
                @error('alamat')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-block">Dikirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
  
@endsection
