@extends('layouts.headerauth')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="card-shadow" id="register-card">
                    <div class="card-body">
                        <h1 class="center text-center mb-5">Daftar</h1>
                        <div class="form-group">
                            <input id="input-register-name" placeholder="Nama" type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <input id="input-register-email" placeholder="Email" type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <input id="input-register-password" placeholder="Password" type="password" class="form-control" name="password">
                        </div>
                        {{-- <div class="form-group">
                            <select name="" class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                            </select>
                        </div> --}}
                        <button onclick="register()" class="btn btn-primary-gradient btn-block shadow">Daftar</button>

                        <div class="mt-3 text-center center">
                            <small class="text-center">sudah punya akun? <a href="{{ url('/auth/login', []) }}" class="">masuk</a></small>
                        </div>
                    </div>
                </div>
            </div>    
        </div>        
    </div>

    <script>
        function register() {
            var name = $('#input-register-name').val();
            var email = $('#input-register-email').val();
            var password = $('#input-register-password').val();

            var url = "{{ url('auth/makeRegister', []) }}";

            var city = "bandung";

            $.ajax({
                url: url,
                type: 'GET',
                data: {
                    email,
                    password,
                    name,
                    city
                },
                beforeSend: function() {
                    $('#register-card').css('opacity','0.6');
                },
                success: function(data) {
                    console.log(data);
                    $('#register-card').html("success");
                    window.location.href = '/';
                },
                error: function(data) {
                    console.log(data);
                    
                }
            });
        }
    </script>


@endsection


