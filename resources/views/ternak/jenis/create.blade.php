@extends('create-form')
@section('form')
<x-input.input label="Nama" name="nama" type="text" />
<x-input.input label="Harga" name="harga" type="number" />
<x-input.input label="Jenis" name="jenis" type="text" />
@endsection
