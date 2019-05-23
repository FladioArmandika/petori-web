@extends('layouts.header')


@section('content')
<form action={{ url('service/order', []) }} method="post">
    {{ csrf_field() }}

    <input type="" name="serviceId" value={{ $service['_id'] }} style="opacity:0">
<div class="section-service-detail">
    <div class="container">

        <h1>{{ $service['name'] }}</h1>

        <div class="row mt-5">
            <div class="col-md-5">
                {{-- JENIS HEWAN --}}
                <h3>Jenis Hewan</h3>
                <div class="row section-jenishewan" >
                    @foreach ($categories as $category)
                        <div class="col-md-6  mt-2">
                            <div id='card-jenis-{{$category}}' onclick="chooseJenisHewan('{{$category}}')" class="btn btn-outline-secondary btn-block card-sm round-15">
                                <div class="card-body text-center"><span>{{ $category }}</span></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-7">
                 {{-- LAYANAN --}}
                 <h3>Pilih Layanan</h3>
                 <div class="" id="itemlist">
                     {{-- ITEM COMPONENT --}}
                 </div>
            </div>
        </div>
    </div>

    {{-- SIDEBAR PAYMENT --}}
    <div class="total-price-card">
        <div class="card-shadow">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h4>
                            <span class="text-secondary">Total harga</span> Rp.<span id="total-price">0</span>
                        </h4>
                    </div>
                    <div class="col-md-4">
                        <button 
                            type="submit"
                            id="btn-service-lanjut" 
                            class="btn btn-disable btn-block mt-3 shadow">
                            Lanjut
                        </button>
                    </div>    
                </div>
            </div>
        </div>
        
    </div>
</div>
</form>


<script>
    
    function chooseJenisHewan(hewan) {

        var listhewan = ['anjing','kucing','reptil','ikan','burung'];

        cartId = [];
        cartPrices = [];
        totalPrice = 0;
        $("#total-price").text(totalPrice);

        cartId.forEach(element => {
            $('#item-cb-'+key).prop('checked', false);
        });

        listhewan.forEach(element => {
            if(element == hewan) {
                $('#card-jenis-' + hewan).toggleClass('card-jenishewan-selected','1s');
                
                //ajax req
                var url = "{{ url('service/order/fitems', []) }}" + "/" + hewan;
                $.ajax({
                    url: url,
                    type: 'GET',
                    beforeSend: function() {
                        $('#itemlist').html('loading')
                    },
                    success: function (data) {
                        console.log(data);
                        $('#itemlist').html(data);
                    }
                })

            } else {
                $('#card-jenis-' + element).removeClass('card-jenishewan-selected','1s');
            }
        });

    }

</script>
    

@endsection