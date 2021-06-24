@extends('templates/base2')
@section('title','buat')
@section('container')

<div class="shadow  bg-white rounded card" id="create">
<form action="/utif/store" method="post">
    {{csrf_field()}}
    <div class="form-group w-75 p-3">
        <label for="name">Kegiatan</label>
        <input class="form-control @error('Kegiatan') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('Kegiatan') }}" placeholder="Nama kegiatan"> @error('Kegiatan')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group w-75 p-3">
        <label for="type">Tanggal</label>
        <input class="form-control @error('Tanggal') is-invalid @enderror" type="date" name="date" id="date" value="{{ old('Tanggal') }}" placeholder="masukkan tipe buku"> @error('Tanggal')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group w-75 p-3">
        <label for="stock">Waktu</label>
        <input class="form-control @error('Waktu') is-invalid @enderror" type="time" name="time" id="time" value="{{ old('Waktu') }}" placeholder="masukkan stock buku"> @error('Waktu')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group float-right w-75 p-3">
        <button class="btn btn-lg btn-danger" type="reset">Reset</button>
        <button class="btn btn-lg btn-primary" type="submit">Submit</button>
    </div>
</form>
</div>