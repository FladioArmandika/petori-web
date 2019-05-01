@extends('layouts.header')


@section('content')
<form action={{ url('service/order', []) }} method="post">
    {{ csrf_field() }}

    <input type="" name="serviceId" value={{ $service['_id'] }} style="opacity:0">
<div class="section-service-detail">
    <div class="container">

        <h1>{{ $service['name'] }}</h1>

        <div class="row">
            <div class="col-md-8">
                
                {{-- JENIS HEWAN --}}
                <h3>Jenis Hewan</h3>
                <div class="row section-jenishewan" >
                    {{-- <div class="col-md-2">
                        <div id='card-jenis-anjing' onclick="chooseJenisHewan('anjing')" class="card-shadow card-sm">
                            <div class="card-body text-center"><span>Anjing</span></div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div id="card-jenis-kucing" onclick="chooseJenisHewan('kucing')" class="card-shadow card-sm">
                            <div class="card-body text-center"><span>Kucing</span></div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div id="card-jenis-reptil" onclick="chooseJenisHewan('reptil')" class="card-shadow card-sm">
                            <div class="card-body text-center"><span>Reptil</span></div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div id="card-jenis-ikan" onclick="chooseJenisHewan('ikan')" class="card-shadow card-sm">
                            <div class="card-body text-center"><span>Ikan</span></div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div id="card-jenis-burung" onclick="chooseJenisHewan('burung')" class="card-shadow card-sm">
                            <div class="card-body text-center"><span>Burung</span></div>
                        </div>
                    </div> --}}
                    @foreach ($categories as $category)
                        <div class="col-md-2">
                            <div id='card-jenis-{{$category}}' onclick="chooseJenisHewan('{{$category}}')" class="card-shadow card-sm">
                                <div class="card-body text-center"><span>{{ $category }}</span></div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- LAYANAN --}}
                <div class="mt-5"></div>
                <h3>Pilih Layanan</h3>
                <div class="row" id="itemlist">
                    {{-- ITEM COMPONENT --}}
                </div>
            </div>
            <div class="col-md-4">
                {{-- SIDEBAR PAYMENT --}}
                <div class="card-shadow">
                    <div class="row">
                        <div class="col-md-4">Total harga</div>
                        <div class="col-md-8"  style="text-align: right">
                            Rp.   <span id="total-price">0</span>
                        </div>
                    </div>
                    
                </div>
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