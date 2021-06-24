@extends('templates/base2')
@section('title','edit')
@section('container')

<div class="shadow  bg-white rounded card" id="create">
<form action="/utif/update" method="post">
    {{csrf_field()}}
    <div class="form-group w-75 p-3">
        <input class="form-control" type="hidden" name="id" id="id" value="{{ $u->id_kegiatan}}">
        <label for="name">Kegiatan</label>
        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ $u->Kegiatan }}" placeholder="Masukkan Nama Buku"> @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group w-75 p-3">
        <label for="type">Tanggal</label>
        <input class="form-control @error('date') is-invalid @enderror" type="date" name="date" id="date" value="{{ $u->Tanggal }}" placeholder="masukkan tipe buku"> @error('date')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group w-75 p-3">
        <label for="stock">Waktu</label>
        <input class="form-control @error('time') is-invalid @enderror" type="time" name="time" id="time" value="{{ $u->Waktu }}" placeholder="masukkan stock buku"> @error('time')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group float-right w-75 p-3">
        <button class="btn btn-lg btn-danger" type="reset">Reset</button>
        <button class="btn btn-lg btn-primary" type="submit" value="Simpan Data">Submit</button>
    </div>
</form>
</div>
