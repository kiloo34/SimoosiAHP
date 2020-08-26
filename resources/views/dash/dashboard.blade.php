{{-- @include('template.table.head') --}}
@extends('app.table')
@section('content')
<div class="row clearfix">
    <x-card title="Ternak" />
    <x-card title="Jenis Ternak" />
    <x-card title="Peternak" />
    <x-card title="Rekomendasi Ternak" />
</div>
<div class="row clearfix">
    <x-chart.bar />
</div>
<div class="row clearfix">

</div>
@endsection
{{-- @include('template.table.foot') --}}
