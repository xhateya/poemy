@extends('layouts.app') @section('content') <div class="col-md-8">
    <div class="card border-0 shadow rounded">
      <div class="card-body"> Selamat Datang <strong>{{ auth()->user()->name; }}</strong>
        <hr>
        <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
  document.getElementById('logout-form').submit();" class="btn btn-md btn-primary">LOGOUT</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
        <a class="btn btn-primary" href="{{ url('/poetry') }}" enctype="multipart/form-data">hehe</a>
      </div>
    </div>
  </div> @endsection