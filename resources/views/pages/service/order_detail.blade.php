@extends('layouts.header')

@section('content')

<div class="section-order-detail">
    <div class="container">
        <a href="/" class="btn btn-link"> < kembali</a>
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <div class="card-shadow mt-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-secondary" for="">Nama</label>
                                    <h4 id="text-order-name">Fladio Armandika</h4>
                                </div>
                                <div class="form-group">
                                    <label class="text-secondary" for="">Kota</label>
                                    <h4 id="text-order-city">Cimahi</h4>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-secondary" for="">Alamat</label>
                                    <p id="text-order-address" style="font-weight: 100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium doloremque quas quasi a id, qui cum non libero, ad voluptatem inventore eveniet. Porro alias dolore animi sapiente saepe necessitatibus expedita!</p>
                                </div>
                            </div>
                            <div class="col-md-6 ml-auto m-5" style="float:right;">
                                
                                <button type="button" 
                                class="btn btn-secondary btn-sm " 
                                data-toggle="modal" data-target="#editAddress">
                                edit
                                </button>
                                <a href={{ url('/service/order/confirm', []) }}
                                type="submit"
                                class="btn btn-primary-gradient shadow">
                                Lanjut
                                </a>
                            </div>
                        </div>
                        
                        
                        
                        
                       
                    </div>  
                </div>
            </div>
        </div>
        
        
        
    </div>
</div>
    
    
{{-- MODAL EDIT ALAMAT --}}
<div class="modal fade" tabindex="-1" role="dialog" id="editAddress">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <input id="input-order-name" type="text" class="form-control" placeholder="Nama">
            </div>
            <div class="form-group">
                <input id="input-order-city" type="text" class="form-control" placeholder="Kota">
            </div>
            <div class="form-group">
                <textarea name="" id="input-order-address" cols="30" rows="10" class="form-control" placeholder="Alamat"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" >Close</button>
            <button  onclick="changeAddressDetail()" type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
</div>

<script>
    
</script>

@endsection