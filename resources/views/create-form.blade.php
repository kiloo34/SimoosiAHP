@extends('app.form')
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <x-CardHeader :subtitle="$subtitle" />
            <div class="body">
                <form id="forms" action="{{$action}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @yield('form')
                    <hr>
                    <x-btn.cancel :backLink="$backLink" />
                    <x-btn.save />
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // $(function () {
        // $('#forms').validate({
            // rules: {
            //     'checkbox': {
            //         required: true
            //     },
            //     'gender': {
            //         required: true
            //     }
            // },
        //     highlight: function (input) {
        //         $(input).parents('.form-line').addClass('error');
        //     },
        //     unhighlight: function (input) {
        //         $(input).parents('.form-line').removeClass('error');
        //     },
        //     errorPlacement: function (error, element) {
        //         $(element).parents('.form-group').append(error);
        //     }
        // });
    // });
</script>
@endsection
