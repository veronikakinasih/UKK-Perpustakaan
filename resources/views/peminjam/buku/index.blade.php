@extends('layouts/app')

@section('content')
  <div style="display: flex; align-items: center;">
    <div>
        <p style="margin-left: 130px; font-size: 40px; color:#CA3237;"><b>Welcome to Perpustakaan Vero</b></p>
        <p style="margin-left: 130px; font-size: 20px; color: grey;">Ini adalah website perpustakaan yang dikelola oleh Vero </p>
    </div>
    <img src="/adminlte/dist/img/baca buku.png" alt="Image" style="margin-left: 235px ; width: 350px; height: 350px; margin-right: 20px;">
  </div>
  <div style="margin-top: 40px;"></div>
  <div style="border-top: 30px solid #f3e4fb;"></div>
  <div style="background-color: #f3e4fb; " >
        <livewire:peminjam.buku></livewire:peminjam.buku>
  </div>
    
@endsection