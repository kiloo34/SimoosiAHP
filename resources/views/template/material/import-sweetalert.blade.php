@push('css')
<link href="{{ asset('plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
@endpush

@push('js')
<script src="{{ asset('plugins/sweetalert/sweetalert.min.js') }}"></script>
@endpush

@push('script')
<script>
    function hapus() {
        e.preventDefault();
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function hapus(link, e){
            var f = document.getElementById('form-hapus');
            f.action = link;
            f.submit();
            // swal("Deleted!", "Your imaginary file has been deleted.", "success");
        });
    }
</script>
@endpush
