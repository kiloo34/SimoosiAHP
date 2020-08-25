<x-rightbar />
</div>
<x-footer />
</div>
</div>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
{{-- <script src="{{ asset('js/waves.js') }}"></script> --}}
<script src="{{ asset('js/sidebarmenu.js') }}"></script>

<script src="{{ asset('plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
{{-- <script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script> --}}

<script src="{{ asset('js/custom.min.js') }}"></script>

@stack('js')
@stack('script')

<script src="{{ asset('plugins/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
{{-- <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script> --}}

<script src="{{ asset('plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>

<script>
    $(document).ready( function () {
        $('#dt').DataTable();
    });
</script>
</body>

</html>
