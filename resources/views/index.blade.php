@extends('templates/base2')
@section('title','Home')
@section('container')

<a href="#">
<img src="{{asset('assets/img/logo.png')}}" id="img3">
</a>


<div class="shadow p-3 mb-5 bg-danger rounded card" id="div3">
  <div class="col-15 text-white">
    <p class="akun">Detail Akun</p>
    <p class="akun2">Nama: {{Session::get('name')}}</p>
    <p >Email: {{Session::get('email')}}</p>
  </div>
  <div class="nav-item">
    <a class="text-white fixed-bottom position-absolute mb-3" id="log" href="{{url('/logout')}}">Logout</a>
  </div>
</div>


<div class="jam-digital">
	<div class="shadow p-3 bg-danger rounded card" id="kotak1">
		<p id="jam"></p>
	</div>
	<div class="shadow p-3 bg-danger rounded card" id="kotak2">
		<p id="menit"></p>
	</div>
	<div class="shadow p-3 bg-danger rounded card" id="kotak3">
		<p id="detik"></p>
	</div>
</div>

<div class="card" id="card1" style="width: 18rem;">
    <img src="{{asset('assets/img/tolist.png')}}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Jadwal Kegiatan</h5>
    <p class="card-text">Buat jadwal kegiatanmu dan mulailah menjadi teratur </p>
    <a href="{{url('/utif')}}" class="btn btn-primary">Klik aku</a>
</div>
</div>

<div class="card" id="card2" style="width: 18rem;">
    <img src="{{asset('assets/img/kartu.png')}}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Game samakan kartu</h5>
    <p class="card-text">Bosen?main game samakan kartu dulu yu </p>
    <a href="{{url('/kartu')}}" class="btn btn-primary">Klik aku</a>
</div>
</div>

<script>
	window.setTimeout("waktu()", 1000);
	function waktu() {
		var waktu = new Date();
		setTimeout("waktu()", 1000);
		document.getElementById("jam").innerHTML = waktu.getHours();
		document.getElementById("menit").innerHTML = waktu.getMinutes();
		document.getElementById("detik").innerHTML = waktu.getSeconds();
	}
</script>

@endsection

    