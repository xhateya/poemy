@extends('layouts.app',['title'=>'Register - Poem'])

@section('content')
<div class="col-md-8">
<div class="card border-0 shadow rounded">
<div class="card-body">
<h4 class="font-weight-bold">Register</h4>
<hr>
<form action="{{ route('register') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="font-weight-bold text-uppercase">Full Name </label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Lengkap">
                @error('name')
                <div class="alert" alert-danger mt-2>
                   {{  $message }}
                </div>
                @enderror
              </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="font-weight-bold text-uppercase">Email address </label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Alamat Email">
                @error('email')
                <div class="alert" alert-danger mt-2>
                    {{$message}}
                </div>
                @enderror
              </div>
        </div>
       
        <div class="col-md-6">
            <div class="form-group">
                <label class="font-weight-bold text-uppercase">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password">
                @error('password')
                <div class="alert" alert-danger mt-2>
                   {{$message}}
                </div>
                @enderror
              </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="font-weight-bolf text -uppercase">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Masukkan Konfirmasi Password">
            </div>
        </div>

    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
</div>
<div class="login mt-3 text-center">
    <p>Sudah punya akun? Login <a href="/login">Disini</a></p>
</div>
</div>


       
       
    
@endsection