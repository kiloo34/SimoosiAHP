@push('css')
<link href="{{ asset('plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet"
    type="text/css" />
@endpush

@push('js')
<script src="{{ asset('plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush

@push('script')
<script>
    $('#mdate').bootstrapMaterialDatePicker({
        weekStart: 0,
        time: false
    });
</script>
@endpush
