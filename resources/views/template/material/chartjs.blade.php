<div class="row">
    <div class="col-lg-9 col-xlg-9">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex flex-wrap">
                            <div>
                                <h4 class="card-title">Yearly Earning</h4>
                            </div>
                            <div class="ml-auto">
                                <ul class="list-inline">
                                    <li>
                                        <h6 class="text-muted text-success">
                                            <i class="fa fa-circle font-10 m-r-10 "></i>Sales
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="text-muted  text-info">
                                            <i class="fa fa-circle font-10 m-r-10"></i>Earning ($)
                                        </h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <canvas id="chart2" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Total Visit</h4>
                <div class="d-flex">
                    <div class="align-self-center">
                        <h4 class="font-medium m-b-0"><i class="ti-angle-up text-success"></i> 12456</h4>
                    </div>
                    <div class="ml-auto">
                        //
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bounce rate</h4>
                <div class="d-flex">
                    <div class="align-self-center">
                        <h4 class="font-medium m-b-0"><i class="ti-angle-down text-danger"></i> 456</h4>
                    </div>
                    <div class="ml-auto">
                        //
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Page Views</h4>
                <div class="d-flex">
                    <div class="align-self-center">
                        <h4 class="font-medium m-b-0"><i class="ti-angle-up text-success"></i> 2456</h4>
                    </div>
                    <div class="ml-auto">
                        //
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<!--morris JavaScript -->
{{-- <script src="{{ asset('plugins/Chart.js/chartjs.init.js') }}"></script> --}}
<script src="{{ asset('plugins/Chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('js/dashboard2.js') }}"></script>
@endpush

@push('script')
<script>
    var ctx2 = document.getElementById("chart2").getContext("2d");
    var data2 = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
                label: "My First dataset",
                fillColor: "#009efb",
                strokeColor: "#009efb",
                highlightFill: "#009efb",
                highlightStroke: "#009efb",
                data: [10, 30, 80, 61, 26, 75, 40]
            },
            {
                label: "My Second dataset",
                fillColor: "#55ce63",
                strokeColor: "#55ce63",
                highlightFill: "#55ce63",
                highlightStroke: "#55ce63",
                data: [28, 48, 40, 19, 86, 27, 90]
            }
        ]
    };

    var chart2 = new Chart(ctx2).Bar(data2, {
        scaleBeginAtZero: true,
        scaleShowGridLines: true,
        scaleGridLineColor: "rgba(0,0,0,.005)",
        scaleGridLineWidth: 0,
        scaleShowHorizontalLines: true,
        scaleShowVerticalLines: true,
        barShowStroke: true,
        barStrokeWidth: 0,
        tooltipCornerRadius: 2,
        barDatasetSpacing: 3,
        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
        responsive: true
    });
</script>
@endpush
