@extends('anggota.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Edit Anggota</div>
  <div class="card-body">

    <form action="{{ url('anggota/' .$anggota->id) }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")
      <input type="hidden" name="id" id="id" value="{{$anggota->id}}" id="id" />
      <label>Nama</label></br>
      <input type="text" name="nama" id="nama" value="{{$anggota->nama}}" class="form-control"></br>
      <label>Nickname</label></br>
      <input type="text" name="nickname" id="nickname" value="{{$anggota->nickname}}" class="form-control"></br>
      <label>Domisili</label></br>
      <input type="text" name="domisili" id="domisili" value="{{$anggota->domisili}}" class="form-control"></br>
      <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@section('content')