<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h2><strong>Bar</strong> Chart</h2>
        </div>
        <div class="body">
            <canvas id="barChart"
                style="min-height: 250px; height: 400px; max-height: 500px; max-width: 100%;"></canvas>
        </div>
    </div>
</div>

@push('js')
<script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
@endpush

@push('script')
<script>
    var barChartCanvas = $('#barChart').get(0).getContext('2d')

    var data = {
        labels : ['januari', 'februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        datasets : [{
            label: 'Daftar Jumlah Pertumbuhan Ternak',
            data:[50, 22, 100, 450, 300, 400, 200, 150, 232, 330, 302, 398],
            backgroundColor:'rgba(0, 90, 0)',
            borderWidth:0.5,
            borderColor:'#777',
            hoverBorderWidth:3,
            hoverBorderColor:'#000'
        }]
    }

    var barChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        datasetFill: false
    }

    var barChart = new Chart(barChartCanvas, {
        type: 'bar',
        data: data,
        options: barChartOptions
    })
</script>
@endpush
