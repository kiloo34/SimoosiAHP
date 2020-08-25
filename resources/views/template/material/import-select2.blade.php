@push('css')
<link href="{{ asset('plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('js')
<script src="{{ asset('plugins/select2/dist/js/select2.full.min.js') }}" type="text/javascript"></script>
@endpush

@push('script')
<script>
    $(document).ready(function(){
		$(".select2").select2();
	});
</script>
@endpush
