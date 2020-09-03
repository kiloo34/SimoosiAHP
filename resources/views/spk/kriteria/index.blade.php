@extends('table-view')
@section('table')
<thead>
    <tr>
        <th>#</th>
        <th>Nama Jenis</th>
        {{-- @if(Auth::user()->role == 'admin') --}}
        <th>Aksi</th>
        {{-- @endif --}}
    </tr>
</thead>
<tfoot>
    <tr>
        <th>#</th>
        <th>Nama Produk</th>
        {{-- @if(Auth::user()->role == 'admin') --}}
        <th>Aksi</th>
        {{-- @endif --}}
    </tr>
</tfoot>
@endsection
