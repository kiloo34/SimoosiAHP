@extends('app.form')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <x-CardHeader :title="$title" :subtitle="$subtitle" />
            <div class="card-body">
                <form action="{{$action}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        @yield('form')
                    </div>
                    <div class="form-actions">
                        <x-btn_simpan />
                        <x-btn_batal :modul_link="$modul_link" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
