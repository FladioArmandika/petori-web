@extends('layouts.header')

@section('content')

<div class="section-order">
    <div class="container">
        <div class="card-shadow mt-2 navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a onclick="changeOrderView('all')" class="nav-link" id="nav-order-all">Semua</a>
                </li>
                <li class="nav-item">   
                    <a onclick="changeOrderView('ordered')" class="nav-link" id="nav-order-on">Proses</a>
                </li>
                <li class="nav-item">
                    <a onclick="changeOrderView('complete')" class="nav-link" id="nav-order-complete">Selesai</a>
                </li>
            </ul>
        </div>  
        <div class="row mt-3" id='order-list'>
            <div class="col-md-6">
                <div class="card-shadow">
                    dwkao
                </div>
            </div>
        </div>
        
    </div>
</div>

<script>

    $(document).ready(function() {
        changeOrderView('all');
    })


    function changeOrderView(typeOrder) {
        switch (typeOrder) {
            case "all":
                console.log('all switch');
                $('#nav-order-all').addClass('nav-active')
                $('#nav-order-on').removeClass('nav-active');
                $('#nav-order-complete').removeClass('nav-active');
                break;
            case "ordered":
                console.log('on switch');
                $('#nav-order-all').removeClass('nav-active')
                $('#nav-order-on').addClass('nav-active');
                $('#nav-order-complete').removeClass('nav-active');
                break;
            case "complete":
                console.log('complete switch');
                $('#nav-order-all').removeClass('nav-active')
                $('#nav-order-on').removeClass('nav-active');
                $('#nav-order-complete').addClass('nav-active');
                break;
        }

        var url = "{{ url('/order/s',[]) }}" + '/' + typeOrder;
        console.log(url);
        
        $.ajax({
            url: url,
            type: 'GET',
            success: function(data) {
                $('#order-list').html(data);
            }
        })

    }

</script>
   
    
@endsection 