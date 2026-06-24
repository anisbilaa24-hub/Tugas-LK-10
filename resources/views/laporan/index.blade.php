@extends('layouts.app')

@section('content')

<div class="container mt-5">

<h2 class="mb-3">
Daftar Laporan
</h2>

<a
href="/laporan/create"
class="btn btn-primary mb-3">

Tambah Laporan

</a>

<div class="card shadow">

<div class="table-responsive">

<table class="table">

<thead>

<tr>

<th>ID</th>
<th>Pelapor</th>
<th>Jenis</th>
<th>Lokasi</th>

</tr>

</thead>

<tbody>

@foreach($laporan as $item)

<tr>

<td>{{ $item->id }}</td>

<td>{{ $item->nama_pelapor }}</td>

<td>{{ $item->jenis_sampah }}</td>

<td>{{ $item->lokasi }}</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>

</div>

@endsection