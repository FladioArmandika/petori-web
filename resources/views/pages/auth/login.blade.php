@extends('layouts.headerauth')

@section('content')
    
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-5">
                <div class="card-shadow">
                    <div class="card-body">
                        <div class="form-group">
                            <input placeholder="Email" type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input placeholder="Password" type="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary-gradient btn-block shadow">LOGIN</button>

                        <p class="mt-5">belum punya akun? <a href={{ url('/auth/register', []) }}>daftar</a> </p>


                        <a href="">Google</a>
                        <a href="">Facebook</a>
                    </div> 
                </div>
            </div>    
        </div>        
    </div>
@endsection


