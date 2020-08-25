@include('template.table.head')
<div class="row">
    @yield('info')
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data {{$title}}</h4>
                {{-- <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6> --}}
                <x-btn_tambah :link="$createLink" />
                <div class="table-responsive m-t-40">
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
@include('template.table.foot')
