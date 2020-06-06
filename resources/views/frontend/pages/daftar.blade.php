@extends('frontend.layouts.main');

@section('content')
<div class="admission_area">
    <div class="admission_inner">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="admission_form">
                        <h3>Daftar Siswa Online</h3>
                        {{-- <form action="#"> --}}
                        {!! Form::open(['route' => 'daftar']) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_input">
                                        {{-- <input type="text" placeholder="First Name"> --}}
                                        {!! Form::text('nama_depan', '',[
                                            'placeholder' => 'Nama Depan'
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_input">
                                        {{-- <input type="text" placeholder="Last Name"> --}}
                                        {!! Form::text('nama_belakang', '',[
                                            'placeholder' => 'Nama Belakang'
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_input">
                                        {{-- <input type="text" placeholder="Phone Number"> --}}
                                        {!! Form::select('agama', [
                                            'islam' => 'islam',
                                            'kristen' => 'kristen',
                                            'katolik' => 'katolik',
                                            'budha' => 'budha',
                                            'hindu' => 'hindu',
                                        ],
                                        '',
                                        [
                                            'class' => 'form-control',
                                            'placeholder' => 'pilih agama'
                                        ]
                                        ); !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_input">
                                        {{-- <input type="text" placeholder="Email Address"> --}}
                                        {!! Form::select('kelamin', [
                                            'L' => 'Laki - laki',
                                            'P' => 'Perempuan'
                                        ],
                                        '',
                                        [
                                            'class' => 'form-control',
                                            'placeholder' => 'Jenis Kelamin'
                                        ]
                                        ); !!}
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4">
                                    <div class="single_input">
                                        {!! Form::email('email', '',[
                                            'placeholder' => 'example@mail.com'
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4">
                                    <div class="single_input">
                                        {!! Form::password('pass',[
                                            'placeholder' => '*************'
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div class="single_input">
                                        {{-- <textarea cols="30" placeholder="Write an Application" rows="10"></textarea> --}}
                                        {!! Form::textarea('alamat', '',[
                                            'placeholder' => 'Alamat Lengkap',
                                            'cols' => 30,
                                            'rows' => 10
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="apply_btn">
                                        <button class="boxed-btn3" type="submit">Daftar Sekarang</button>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}    
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="recent_event_area section__padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section_title text-center mb-70">
                    <h3 class="mb-45">Recent Event</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="single_event d-flex align-items-center">
                    <div class="date text-center">
                        <span>02</span>
                        <p>Dec, 2020</p>
                    </div>
                    <div class="event_info">
                        <a href="event_details.html">
                            <h4>How to speake like a nativespeaker?</h4>
                         </a>
                        <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i class="flaticon-calendar"></i> 21Nov 2020 </span> <span> <i class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                    </div>
                </div>
                <div class="single_event d-flex align-items-center">
                    <div class="date text-center">
                        <span>03</span>
                        <p>Dec, 2020</p>
                    </div>
                    <div class="event_info">
                        <a href="event_details.html">
                            <h4>How to speake like a nativespeaker?</h4>
                         </a>
                        <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i class="flaticon-calendar"></i> 21Nov 2020 </span> <span> <i class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                    </div>
                </div>
                <div class="single_event d-flex align-items-center">
                    <div class="date text-center">
                        <span>10</span>
                        <p>Dec, 2020</p>
                    </div>
                    <div class="event_info">
                        <a href="event_details.html">
                            <h4>How to speake like a nativespeaker?</h4>
                         </a>
                        <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i class="flaticon-calendar"></i> 21Nov 2020 </span> <span> <i class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection