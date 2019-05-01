@extends('layouts.header')

@section('content')

    <div class="section-order-confirm ">
        <div class="container">
            <div class="card-shadow">
                <div class="card-body">
                    <h1>Order Confirmation</h1>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-secondary">kategori</label>
                            </div>
                            <div class="form-group">
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-secondary" for="">Nama</label>
                                <h4 id="text-order-name">Fladio Armandika</h4>
                            </div>
                            <div class="form-group">
                                <label class="text-secondary" for="">Kota</label>
                                <h4 id="text-order-city">Cimahi</h4>
                            </div>
                            <div class="form-group">
                                <label class="text-secondary" for="">Alamat</label>
                                <p id="text-order-address" style="font-weight: 100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium doloremque quas quasi a id, qui cum non libero, ad voluptatem inventore eveniet. Porro alias dolore animi sapiente saepe necessitatibus expedita!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>

@endsection