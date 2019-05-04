@extends('layouts.header')




@section('content')

    
    
    <div class="page-home">

        

        {{-- LANDING --}}
        <div class="bg-landing"></div>
        <img src={{ asset('img/bg1.png') }} alt="" srcset="" class="bg-landing-1">
        <img src={{ asset('img/bg2.png') }} alt="" srcset="" class="bg-landing-2">
        <div class="section-landing">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Kebutuhan hewan peliharaan anda</h1>
                        <span>Groovy Vet Care is like a home and family that always open the door for you with full comfort and warmth. Our best team always make sure your pets get the best service</span>
                        <p></p>
                        <button class="btn btn-primary-gradient mt-2 shadow-primary btn-lg" type="submit">Hubungi</button>
                    </div>
                    <div class="col-md-6">
                        <img src={{ asset('img/petori1.png') }} 
                            alt="" srcset=""
                            height="350px"
                            class="float-right">
                    </div>
                </div>
            </div>
        </div>

        {{-- SERVICE --}}
        {{-- <div class="section-landing-service">
            <div class="container">
                <div class="row card-row">
                    <a class="col-md-4" href="/">
                        <div class="card-white">
                            <div class="card-body">
                                <h4>Konsultasi</h4>
                                <small class="text-secondary text-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus provident maiores doloremque </small>
                            </div>
                        </div>
                    </a>
                    <a class="col-md-4" href={{ url('/service/d/5c9ce0d3fb6fc0465d4defe6', []) }}>
                        <div class="card-white">
                            <div class="card-body">
                                <h4>Perawatan</h4>
                                <small class="text-secondary text-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus provident maiores doloremque </small>
                            </div>
                        </div>
                    </a>
                    <a class="col-md-4" href="/">
                        <div class="card-white">
                            <div class="card-body">
                                <h4>Medical</h4>
                                <small class="text-secondary text-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus provident maiores doloremque </small>
                            </div>
                        </div>
                    </a>
                    <a class="col-md-4" href="/">
                        <div class="card-white">
                            <div class="card-body">
                                <h4>Penitipan</h4>
                                <small class="text-secondary text-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus provident maiores doloremque </small>
                            </div>
                        </div>
                    </a>
                    <a class="col-md-4" href="/">
                        <div class="card-white">
                            <div class="card-body">
                                <h4>labolatorium</h4>
                                <small class="text-secondary text-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus provident maiores doloremque </small>
                            </div>
                        </div>
                    </a>
                    <a class="col-md-4" href="/">
                        <div class="card-white">
                            <div class="card-body">
                                <h4>Layanan USG</h4>
                                <small class="text-secondary text-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus provident maiores doloremque </small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div> --}}


        <div class="section-landing-service">
            <div class="container">
                <h2>Layanan</h2>
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <a href="/">
                            <div class="card-shadow round-5">
                                <div class="card-body">
                                    <h5>Konsultasi</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mt-3">
                        <a href={{ url('/service/d/5c9ce0d3fb6fc0465d4defe6', []) }}>
                            <div class="card-shadow round-5">
                                <div class="card-body">
                                    <h5>Perawatan</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mt-3">
                        <a href="/">
                            <div class="card-shadow round-5">
                                <div class="card-body">
                                    <h5>Medic</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mt-3">
                        <a href="/">
                            <div class="card-shadow round-5">
                                <div class="card-body">
                                    <h5>Penitipan</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mt-3">
                        <a href="/">
                            <div class="card-shadow round-5">
                                <div class="card-body">
                                    <h5>Labolatorium</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mt-3">
                        <a href="/">
                            <div class="card-shadow round-5">
                                <div class="card-body">
                                    <h5>Layanan USG</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        


        {{-- FOOTER --}}
        <div class="section-footer mt-5">
            <div class="container">
                
            </div>
        </div>


    </div>


@endsection


