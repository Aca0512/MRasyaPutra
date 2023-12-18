@extends('anggota.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Tambahkan Anggota Baru</div>
  <div class="card-body">
       
      <form action="{{ url('anggota') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>Nickname</label></br>
        <input type="text" name="nickname" id="nickname" class="form-control"></br>
        <label>Domisili</label></br>
        <input type="text" name="domisili" id="domisili" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop