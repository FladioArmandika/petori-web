
    <div class="section-order-confirm ">
        
        <div class="container">
            <div class="card-shadow">
                <div class="card-body">
                    <h1>Order Confirmation </h1>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-secondary">Kategori</label>
                            </div>
                            <div class="form-group mt-5">
                                <label for="" class="text-secondary">Items</label>
                                <table class="table table-striped">
                                    <thead>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($items as $item)
                                            <tr>
                                                <td>{{$item['name']}}</td>
                                                <td></td>
                                                <td>560000</td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                            <p>
                                total : <label for="">500000</label>
                            </p>
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
