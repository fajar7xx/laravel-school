@extends('layouts.app')

@section('content')
<!-- Page Title Header Starts-->
<div class="row page-title-header">
    <div class="col-12">
        <div class="page-header">
            <h4 class="page-title">Edit Siswa</h4>
        </div>
    </div>
</div>
<!-- Page Title Header Ends-->
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('siswa.update', [$siswa->id]) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nama_depan">Nama Depan</label>
                        <input type="text" name="nama_depan" id="nama_depan" class="form-control" value="{{ $siswa->nama_depan }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_belakang">Nama Belakang</label>
                        <input type="text" name="nama_belakang" id="nama_belakang" class="form-control" value="{{ $siswa->nama_belakang }}">
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="L" {{ $siswa->kelamin === 'L' ? 'selected' : '' }}>Laki - laki</option>
                            <option value="P" {{ $siswa->kelamin === 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select name="agama" id="agama" class="form-control">
                            <option value="">Pilih Agama</option>
                            <option value="islam" {{ $siswa->agama === 'islam' ? 'selected': '' }}>islam</option>
                            <option value="kristen" {{ $siswa->agama === 'kristen' ? 'selected': '' }}>kristen</option>
                            <option value="katolik" {{ $siswa->agama === 'katolik' ? 'selected': '' }}>katolik</option>
                            <option value="hindu" {{ $siswa->agama === 'hindu' ? 'selected': '' }}>hindu</option>
                            <option value="budha" {{ $siswa->agama === 'budha' ? 'selected': '' }}>budha</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <textarea name="alamat" id="alamat" rows="5" class="form-control">{{ $siswa->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="avatar">Avatar</label>
                        <input type="file" name="avatar" id="avatar" class="form-control-file" accept="image/x-png,image/gif,image/jpeg">
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('siswa.index') }}" class="btn btn-secondary mr-1">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

