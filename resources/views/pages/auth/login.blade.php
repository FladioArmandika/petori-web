@extends('layouts.headerauth')

@section('content')
    
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-5">
                <div class="card-shadow" id="login-card">
                    <div class="card-body" >
                        {{-- <form action={{ url('auth/login', []) }} method="post"> --}}
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input id="input-login-email" placeholder="Email" type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <input id="input-login-password" placeholder="Password" type="password" class="form-control" name="password">
                            </div>
                            <button onclick="login()" type="submit" class="btn btn-primary-gradient btn-block shadow">LOGIN</button>
                        {{-- </form> --}}
                        <p class="mt-5">belum punya akun? <a href={{ url('auth/register', []) }}>daftar</a> </p>


                        <a href="">Google</a>
                        <a href="">Facebook</a>
                    </div> 
                </div>
            </div>    
        </div>        
    </div>

    <script>
        function login() {
            var email = $('#input-login-email').val();
            var password = $('#input-login-password').val();

            var url = "{{ url('auth/makelogin', []) }}";

            console.log(email+password);
            

            $.ajax({
                url: url,
                type: 'GET',
                data: {
                    email,
                    password
                },
                beforeSend: function() {
                    $('#login-card').css('opacity','0.6');
                },
                success: function(data) {
                    console.log(data);
                    $('#login-card').html(data);
                    window.location.href = '/';
                },
                error: function(data) {
                    console.log(data);
                    
                }
            });
        }
    </script>

@endsection


