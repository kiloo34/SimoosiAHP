{{-- @include('template.table.head') --}}
@extends('app.table')
@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <ul class="row profile_state list-unstyled">
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="body">
                        <i class="zmdi zmdi-eye col-amber"></i>
                        <h4>2,365</h4>
                        <span>Total Ternak</span><br>
                        <a href="#" class="small-box-footer">More info</a>
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="body">
                        <i class="zmdi zmdi-thumb-up col-blue"></i>
                        <h4>365</h4>
                        <span>Jenis Ternak</span><br>
                        <a href="#" class="small-box-footer">More info</a>
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="body">
                        <i class="zmdi zmdi-comment-text col-red"></i>
                        <h4>65</h4>
                        <span>Total </span><br>
                        <a href="#" class="small-box-footer">More info</a>
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="body">
                        <i class="zmdi zmdi-account text-success"></i>
                        <h4>2,055</h4>
                        <span>Total Peternak</span><br>
                        <a href="#" class="small-box-footer">More info</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection
{{-- @include('template.table.foot') --}}
