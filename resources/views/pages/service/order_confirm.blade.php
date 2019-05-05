

@foreach ($items as $key => $item)
    <input id="cart-item-{{$key}}" type="hidden" name="" value={{$item['_id']}}>
@endforeach

    <div class="section-order-confirm">
        <div class="container">
            <div class="card-shadow">
                <div class="card-body">
                    <h1>Order Confirmation </h1>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-secondary">Kategori</label>
                                <h3>{{$category}}</h3>
                            </div>
                            <div class="form-group mt-5">
                                <label for="" class="text-secondary">Items</label>
                                <table class="table table-striped">
                                    <thead>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($items as $key => $item)
                                            <tr>
                                                <td>{{$item['name']}}</td>
                                                <td>{{$item['price']}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <p>
                                total : <label for="">{{$totalprice}}</label>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-secondary" for="">Nama</label>
                                <h4 id="text-order-name">{{$name}}</h4>
                            </div>
                            <div class="form-group">
                                <label class="text-secondary" for="">Kota</label>
                                <h4 id="text-order-city">{{$city}}</h4>
                            </div>
                            <div class="form-group">
                                <label class="text-secondary" for="">Alamat</label>
                                <p id="text-order-address" style="font-weight: 100">{{$address}}</p>
                            </div>
                        </div>
                        <div class="mr-auto ml-auto">
                            <a onclick="goBack()" class="btn btn-light text-secondary btn-lg shadow mr-3">Kembali</a>
                            <button onclick="makeOrder()" class="btn btn-primary-gradient btn-lg shadow">Konfirmasi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>
    function goBack() {
        window.history.back()
    }
</script>

<script>

    var request;

    function makeOrder() {

        var name = $('#text-order-name').text();
        var city = $('#text-order-city').text();
        var address = $('#text-order-address').text();

        var numOfItem = {{$key}};
        
        var items = [];

        for (let i = 0; i <= numOfItem; i++) {
            var item = $("#cart-item-"+i).val();
            items.push(item);
        }

        var url = "{{ url('service/order/success', []) }}";

        $.ajax({
            url: url,
            type: 'GET',
            data: {
                name,
                city,
                address,
                items
            },
            beforeSend: function() {
                $(".section-order-detail").html("loading");
            },
            success: function(data) {
                $('.section-order-detail').html(data);
            },
            error: function(ts) { console.log(ts.responseText) }
        })
    }

</script>
