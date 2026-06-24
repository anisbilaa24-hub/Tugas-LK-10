@extends('layouts.app')

@section('content')

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-primary text-white">
<h3>Buat Laporan Sampah</h3>
</div>

<div class="card-body">

<form method="POST" action="/laporan">

@csrf

<div class="mb-3">

<label>Nama Pelapor</label>

<input
type="text"
name="nama_pelapor"
class="form-control">

</div>

<div class="mb-3">

<label>Jenis Sampah</label>

<select
name="jenis_sampah"
class="form-select">

<option>Organik</option>
<option>Anorganik</option>
<option>B3</option>

</select>

</div>

<div class="mb-3">

<label>Deskripsi</label>

<textarea
name="deskripsi"
class="form-control"></textarea>

</div>

<div class="mb-3">

<label>Lokasi</label>

<input
type="text"
name="lokasi"
class="form-control">

</div>

<button
class="btn btn-primary">

Simpan Laporan

</button>

</form>

</div>

</div>

</div>

@endsection