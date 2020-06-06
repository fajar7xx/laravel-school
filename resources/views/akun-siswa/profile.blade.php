@extends('backend.layouts.app')

@section('content')
<!-- Page Title Header Starts-->
<div class="row page-title-header">
    <div class="col-12">
        <div class="page-header">
            <h4 class="page-title">My Profile</h4>
        </div>
    </div>
</div>
<!-- Page Title Header Ends-->

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <img src="{{ $akun->getAvatar() }}" class="img-fluid img-thumbnail">
                        <h3 class="text-center">{{ $akun->namaLengkap() }}</h3>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>Kode</td>
                                            <td>Nama</td>
                                            <td>Semester</td>
                                            <td>Nilai</td>
                                            <td>Guru</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($akun->mapel as $mapel)
                                        <tr>
                                            <td>{{ $mapel->kode }}</td>
                                            <td>{{ $mapel->nama }}</td>
                                            <td>{{ $mapel->semester }}</td>
                                            <td>
                                                <a href="#" id="nilai" class="nilai" data-type="text" data-pk="{{ $mapel->id }}" data-url="/post" data-title="masukkan nilai">
                                                    {{ $mapel->pivot->nilai }}
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('guru.profile', [$mapel->guru_id]) }}">
                                                    {{ $mapel->guru->nama }}
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
