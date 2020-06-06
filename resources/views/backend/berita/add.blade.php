@extends('layouts.app')

@section('css')
<style>
    .ck-editor__editable_inline {
        min-height: 500px;
    }

</style>
@endsection

@section('content')
<!-- Page Title Header Starts-->
<div class="row page-title-header">
    <div class="col-12">
        <div class="page-header">
            <h4 class="page-title">Tambah Berita</h4>
        </div>
    </div>
</div>
<!-- Page Title Header Ends-->
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('berita.store') }}" method="POST" autocomplete="off"
                    enctype="multipart/form-data">
                    @csrf
                    {{-- upload thumbnail --}}
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                            </a>
                        </span>
                        <input id="thumbnail" class="form-control" type="text" name="filepath">
                    </div>
                    <img id="holder" style="margin-top:15px;max-height:100px;">
                    <div class="form-group">
                        <label for="judul">Judul Berita</label>
                        <input type="text" name="judul" id="judul"
                            class="form-control @error('judul') is-invalid @enderror" placeholder="judul berita"
                            value="{{ old('judul') }}">
                        @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="konten">Konten</label>
                        <textarea name="konten" id="konten" cols="30" rows="10"
                            class="form-control @error('konten') is-invalid @enderror">{{ old('konten') }}</textarea>
                        @error('konten')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('siswa.index') }}" class="btn btn-secondary mr-1">Cancel</a>
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('backend/js') }}/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#konten'))
        .then(konten => {
            console.log(konten);
        })
        .catch(error => {
            console.log(error);
        });

</script>

{{-- lfm script --}}
<script src="{{ asset('/vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endsection
