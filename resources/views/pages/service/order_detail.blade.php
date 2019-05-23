@extends('layouts.header')

@section('content')

@foreach ($items as $key => $item)
    <input id="cart-item-{{$key}}" type="hidden" name="" value={{$item['_id']}}>
@endforeach

<div class="section-order-detail">
    <div class="container">
        {{-- <a href="/" class="btn btn-link"> < kembali</a> --}}
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <div class="card-shadow mt-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-secondary" for="">Nama</label>
                                    <input id="text-order-name" type="text" class="form-control round-15">
                                    {{-- <h4 id="text-order-name">Fladio Armandika</h4> --}}
                                </div>
                                <div class="form-group">
                                    <label class="text-secondary" for="">Kota</label>
                                    <input id="text-order-city" type="text" class="form-control round-15">
                                    {{-- <h4 id="text-order-city">Cimahi</h4> --}}
                                </div>
                                <div class="form-group">
                                    <label class="text-secondary" for="">Alamat</label>
                                    <textarea id="text-order-address" name="" id="" cols="30" rows="3" class="form-control round-15"></textarea>
                                    {{-- <p id="text-order-address" style="font-weight: 100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium doloremque quas quasi a id, qui cum non libero, ad voluptatem inventore eveniet. Porro alias dolore animi sapiente saepe necessitatibus expedita!</p> --}}
                                </div>
                                <div class="row mt-2" style="">
                                    <div class="col-md-4">
                                        <a href="/" type="button" 
                                        class="btn btn-white btn-block btn-sm">
                                        kembali
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        {{-- <a href={{ url('/service/order/confirm', []) }} --}}
                                        <a onclick="goToConfirmation()"
                                        type="submit"
                                        class="btn btn-primary-gradient shadow btn-block">
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
    function goToConfirmation() {

        var name = $('#text-order-name').val();
        var city = $('#text-order-city').val();
        var address = $('#text-order-address').val();

        var numOfItem = {{$key}};
        
        var items = [];

        for (let i = 0; i <= numOfItem; i++) {
            var item = $("#cart-item-"+i).val();
            items.push(item);
        }

        console.log(items);
        

        var url = "{{ url('/service/order/confirm', []) }}"
        $.ajax({
            url: url,
            data: {
                name,
                city,
                address,
                items
            },
            type: 'GET',
            beforeSend: function() {
                $('.section-order-detail').html('loading')
            },
            success: function(data) {
                $('.section-order-detail').html(data);
            },
            error: function(ts) { console.log(ts.responseText) }
        });
    }
</script>

@endsection