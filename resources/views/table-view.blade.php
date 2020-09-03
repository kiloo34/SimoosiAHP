@extends('app.table')
@section('content')
<div class="row clearfix">
    <div class="col-12">
        <div class="card">
            <div class="header">
                <h2><strong>Data</strong> {{$title}} </h2>
            </div>
            <div class="body">
                <div class="hidden-print col-md-12 text-right">
                    @yield('btn')
                    <x-btn.add :link="$createLink" />
                </div>
                <div class="table-responsive">
                    <table id="dt" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0"
                        width="100%">
                        @yield('table')
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<form action="" id="form-hapus" method="post">
    @method('delete')
    @csrf
</form>

<script>
    function hapus(link, e) {
        e.preventDefault();

        swal({
            title: "anda yakin ?",
            text: "data yang dihapus tidak bisa dikembalikan !",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function(isConfirm){
            if (isConfirm) {
                var f = document.getElementById('form-hapus');
                f.action = link;
                f.submit();
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
    }

</script>
@endsection
