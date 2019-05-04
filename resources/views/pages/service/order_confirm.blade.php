
    <div class="section-order-confirm ">
        
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
                            <a href="" class="btn btn-primary-gradient btn-lg shadow">Konfirmasi</a>
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
