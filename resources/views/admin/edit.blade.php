@extends('layouts.admin')
@section('content')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('clothing.update', $clothing->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <h3>Seller</h3>
                        <hr>
                        <div class="form-group">
                            <label class="font-weight-bold">AVATAR</label>
                            <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="avatar" name="avatar" accept="image/*" onchange="previewAvatar()">
                            @if ($clothing->avatar)
                            <img src="{{ Storage::url('public/cloth/').$clothing->avatar }}" class="avt-preview img-fluid mt-3" style="width: 200px; height: 200px; object-fit: cover;">
                            @else
                            <img class="avt-preview img-fluid mt-3" style="width: 20%; height: 20%; object-fit: cover;" hidden>
                            @endif

                            <!-- error message untuk avatar -->
                            @error('avatar')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">NAMA</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $clothing->nama) }}" placeholder="Masukkan Nama Anda">
                        
                            <!-- error message untuk nama -->
                            @error('nama')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">KELAS</label>
                            <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{ old('kelas', $clothing->kelas) }}" placeholder="Masukkan Kelas Anda">
                        
                            <!-- error message untuk kelas -->
                            @error('kelas')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">EMAIL</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $clothing->email) }}" placeholder="Masukkan Email Anda">
                        
                            <!-- error message untuk email -->
                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">NOMOR TELEPON</label>
                            <input type="text" class="form-control @error('nomor_telepon') is-invalid @enderror" name="nomor_telepon" value="{{ old('nomor_telepon', $clothing->nomor_telepon) }}" placeholder="Masukkan Nomor Telepon Anda">
                        
                            <!-- error message untuk nomor_telepon -->
                            @error('nomor_telepon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">ALAMAT</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="5" placeholder="Masukkan Alamat Rumah Anda">{{ old('alamat', $clothing->alamat) }}</textarea>
                        
                            <!-- error message untuk alamat -->
                            @error('alamat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <h3>Produk</h3>
                        <hr>

                        <div class="form-group">
                            <label class="font-weight-bold">GAMBAR</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*" onchange="previewImage()">
                            @if ($clothing->avatar)
                            <img src="{{ Storage::url('public/cloth/').$clothing->image }}" class="img-preview img-fluid mt-3" style="width: 80%">
                            @else
                            <img class="img-preview img-fluid mt-3" hidden>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">JUDUL</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $clothing->title) }}" placeholder="Masukkan Judul Clothing Anda">
                        
                            <!-- error message untuk judul -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">HARGA</label>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga', $clothing->harga) }}" placeholder="Masukkan Harga Clothing Anda">
                        
                            <!-- error message untuk judul -->
                            @error('harga')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">KONTEN</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Konten Clothing Anda">{{ old('content', $clothing->content) }}</textarea>
                        
                            <!-- error message untuk content -->
                            @error('content')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                        <button type="button" class="btn btn-md btn-warning">KEMBALI</button>

                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
    CKEDITOR.replace( 'alamat' );

    const previewAvatar = () => {
        const avatar = document.querySelector('#avatar');
        const avtPreview = document.querySelector('.avt-preview');

        avtPreview.removeAttribute('hidden')
        avtPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(avatar.files[0]);

        oFReader.onload = (oFRevent) => {
            avtPreview.src = oFRevent.target.result;
        }
    }
    const previewImage = () => {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.removeAttribute('hidden')
        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = (oFRevent) => {
            imgPreview.src = oFRevent.target.result;
        }
    }
</script>
@endsection