@extends('anggota.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Halaman Anggota</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nama : {{ $anggota->nama }}</h5>
        <p class="card-text">Nickname : {{ $anggota->nickname }}</p>
        <p class="card-text">Domisili : {{ $anggota->domisili }}</p>
  </div>
    </hr>
  </div>
</div>

@endsection