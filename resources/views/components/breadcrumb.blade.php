<div class="block-header">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12">
            <h2>{{$title}}</h2>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 text-right">
            <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                <i class="zmdi zmdi-plus"></i>
            </button>
            <ul class="breadcrumb float-md-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="zmdi zmdi-home"></i>
                        SimooSi</a>
                </li>
                @if ($subtitle == '')
                <li class="breadcrumb-item active">{{$title}}</li>
                @else
                <li class="breadcrumb-item"><a href="{{ route(strtolower($title) . ".index") }}"> {{$title}}</a></li>
                <li class="breadcrumb-item active">{{$subtitle}}</li>
                @endif
            </ul>
        </div>
    </div>
</div>
