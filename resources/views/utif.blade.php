@extends('templates/base2')
@section('title','utif')
@section('container')

<div class="col-6">
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
</div>

<a class="btn btn-primary" id="tambah" href="{{url('/create')}}" role="button">Tambah Jadwal</a>
<a class="btn btn-success" id="tambah1" href="{{url('/')}}" role="button">Menu utama</a>

<div class="shadow  bg-white rounded card" id="crud">
<table class="table table-stripped">
<thead class="thead-primary">
<tr>
<th class="text-center">No</th>
<th>Kegiatan</th>
<th>Tanggal</th>
<th class="text-center">Waktu</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<tbody>
    <?php $i = 1; ?>
        @foreach($utif as $u)
        <tr>
            <td class="text-center">{{$loop->iteration}}</td>
            <td>{{$u->Kegiatan}}</td>
            <td>{{$u->Tanggal}}</td>
            <td class="text-center">{{$u->Waktu}}</td>
            <td>
                <a href="/utif/edit/{{ $u->id_kegiatan }}" class="btn btn-xs btn-primary">Edit</a> |
                <a href="/utif/destroy/{{$u->id_kegiatan}}" class="btn btn-xs btn-danger" onclick="return confirm('yakin?');">Delete</a>
            </td>
        </tr>
        @endforeach
</tbody>
</div>





