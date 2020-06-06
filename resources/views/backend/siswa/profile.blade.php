@extends('backend.layouts.app')

@section('css')
{{-- <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/> --}}
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/css/jquery-editable.css" rel="stylesheet"/>
@endsection

@section('content')
@if (session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Sukses</strong> {{ session('status') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@elseif(session('alert'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Gagal</strong> {{ session('alert') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<!-- Page Title Header Ends-->
<div class="row">
    <div class="col-lg-2 grid-margin stretch-card">
        <div class="card">
            {{-- <div class="card-body">
                <h2 class="card-title">Profile {{ $siswa->nama_depan }}</h2>
            </div> --}}
            <a href="{{ route('siswa.index') }}" class="btn btn-warning btn-fw">Kembali</a>
        </div>
    </div>
</div>

<div class="row profile-page">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
               <div class="mx-auto p-4">
                   <img src="{{ $siswa->getAvatar() }}" class="rounded-circle mx-auto d-block img-fluid" width="100px" height="100px">
                   <p class="my-2 font-weight-bold text-center text-capitalize">{{ $siswa->nama_depan . '  ' . $siswa->nama_belakang }}</p>
               </div>
               <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Profil</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Keterangan</a>
                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Nilai</a>
                </div>
              </nav>
              <div class="tab-content pt-2" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                   <ul class="list-unstyled">
                       <li>Jenis Kelamin : {{ $siswa->kelamin }}</li>
                       <li>Agama : {{ $siswa->agama }}</li>
                       <li>Alamat : {{ $siswa->alamat }}</li>
                       <li>Mata Pelajaran : {{ $siswa->mapel->count() }} Pelajaran</li>
                   </ul>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum error in maxime aut magnam, deserunt possimus. Totam molestiae ad nemo aut. Ipsa optio necessitatibus accusantium dolore sapiente iure deserunt? Odit.
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row my-2">
                        <div class="col-6">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahNilai">
                                Tambah Nilai
                              </button>
                        </div>
                    </div>
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
                                @foreach ($siswa->mapel as $mapel)
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
                    <div class="row my-2">
                        <div class="col-12">
                            <div id="chart-nilai"></div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal NIlai-->
<div class="modal fade" id="tambahNilai" tabindex="-1" role="dialog" aria-labelledby="tambahNilaiLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahNilaiLabel">Tambah Nilai</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('siswa.addnilai', [$siswa->id]) }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="mapel">Mata Pelajaran</label>
                    <select name="mapel" id="mapel" class="form-control">
                        <option value="">Pilih Mata Pelajaran</option>
                        @foreach ($mp as $mp)
                            <option value="{{ $mp->id }}">{{ $mp->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nilai">Nilai</label>
                    <input type="number" name="nilai" id="nilai" class="form-control" min="0" max="100">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('script')
<script src="{{ asset('/assets/js/highcharts.js') }}"></script>
<script>
    Highcharts.chart('chart-nilai', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Laporan Nilai Siswa'
        },
        subtitle: {
            text: 'Source: wali kelas masing masing'
        },
        xAxis: {
            categories: 
                // 'Matematika Dasar',
                // 'Bahasa Asing',
                {!! json_encode($categories) !!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Nilai'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Nilai',
            data: {!! json_encode($nilai) !!}
            // [49.9, 71.5, 80]

        }]
    });
</script>

{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script> --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/js/jquery-editable-poshytip.min.js"></script>
<script>
    $(document).ready(function() {
        $('.nilai').editable();
    });
</script>
@endsection