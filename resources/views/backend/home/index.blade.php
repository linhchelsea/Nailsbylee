@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
    @if(Session::has('fail'))
        <div class="alert alert-danger"><p><strong>{{ Session::get('fail') }}</strong></p></div>
    @endif
    <section class="content-header">
    <h1>
        Trang chủ
    </h1>
</section>

<section class="content">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-database" aria-hidden="true"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><a href="">DANH MỤC</a></span>
                    <span class="info-box-number">5</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-file-code-o"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><a href="">TIỂU MỤC</a></span>
                    <span class="info-box-number">5</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-image"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><a href="">ẢNH HOMEPAGE</a></span>
                    <span class="info-box-number">aaaaaaaaaaaaaaa</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-user" aria-hidden="true"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><a href="">NGƯỜI DÙNG</a></span>
                    <span class="info-box-number">5</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-maroon"><i class="fa fa-university" aria-hidden="true"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><a href="">DỰ ÁN</a></span>
                    <span class="info-box-number">5</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-purple"><i class="fa fa-cubes"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><a href="">NỘI THẤT</a></span>
                    <span class="info-box-number">5</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-teal"><i class="fa fa-adjust"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><a href="">PHONG THỦY</a></span>
                    <span class="info-box-number">5</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-navy"><i class="fa fa-envelope" aria-hidden="true"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><a href="">THƯ CHƯA TRẢ LỜI</a></span>
                    <span class="info-box-number">5</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>

    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-6 connectedSortable">

            <!-- Chat box -->
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Người dùng</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        	<i class="fa fa-minus"></i>
            			</button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove">
                        	<i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="chart-responsive">
                                <canvas id="pieChart" height="190"></canvas>
                            </div>
                            <!-- ./chart-responsive -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <ul class="chart-legend clearfix">
                                <li><i class="fa fa-circle-o text-red"></i> User</li>
                                <li><i class="fa fa-circle-o text-green"></i> Admin</li>
                                <li><i class="fa fa-circle-o text-yellow"></i> Super Admin</li>
                            </ul>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.box -->
        </section>
        <!-- /.Left col -->

        <!-- right col -->
        <section class="col-lg-6 connectedSortable">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Bài viết được xem nhiều</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table users-list clearfix">
                        <tr>
                            <th class="text-blue" style="padding-left: 30px">TIÊU ĐỀ BÀI VIẾT</th>
                            <th class="text-center">LƯỢT XEM</th>
                        </tr>

                            <tr>
                                <td class="text-blue" style="padding-left: 30px"><a class="papers-title" >52452452452</a></td>
                                <td class="text-center text-blue"><span class="papers-seen">fghfhrhrhfgh</span></td>
                            </tr>

                    </table>
                    <!-- /.users-list -->
                </div>
            </div>
        </section>
    </div>
    <!-- /.row (main row) -->
</section>
<!-- /.content -->
</div>

@stop

@section('script')
    <!-- ChartJS 1.0.1 -->
<script src="{{ asset('admin/js/Chart.min.js') }}"></script>
    {{--<script>--}}
        {{--$(function() {--}}
            {{--var pieChartCanvas = $("#pieChart").get(0).getContext("2d");--}}
            {{--var pieChart = new Chart(pieChartCanvas);--}}
            {{--var PieData = [--}}

                {{--{--}}
                    {{--value: {{ $countUsers }},--}}
                    {{--color: "red",--}}
                    {{--highlight: "red",--}}
                    {{--label: "User"--}}
                {{--},--}}
                {{--{--}}
                    {{--value: {{ $countAdmins }},--}}
                    {{--color: "green",--}}
                    {{--highlight: "green",--}}
                    {{--label: "Admin"--}}
                {{--},--}}
                {{--{--}}
                    {{--value: {{ $countSuperAdmins }},--}}
                    {{--color: "yellow",--}}
                    {{--highlight: "yellow",--}}
                    {{--label: "Super Admin"--}}
                {{--},--}}



            {{--];--}}
            {{--var pieOptions = {--}}
                {{--segmentShowStroke: true,--}}
                {{--segmentStrokeColor: "#fff",--}}
                {{--segmentStrokeWidth: 2,--}}
                {{--percentageInnerCutout: 50,--}}
                {{--animationSteps: 100,--}}
                {{--animationEasing: "easeOutBounce",--}}
                {{--animateRotate: true,--}}
                {{--animateScale: false,--}}
                {{--responsive: true,--}}
                {{--maintainAspectRatio: true,--}}
                {{--legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"--}}
        {{--};--}}
        {{--pieChart.Doughnut(PieData, pieOptions);--}}
    {{--});--}}
    {{--</script>--}}
@endsection