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
{{-- <tbody>
    @foreach ($data as $d)
    <tr>
        <td>{{$no}}</td>
<td>{{$d->nama}}</td>
<td>
    <x-btn_edit :link="route('inventaris.edit', $d->id)" />
    <x-btn_hapus :link="route('inventaris.destroy', $d->id)" />
</td>
</tr>
@endforeach
</tbody> --}}
@endsection
