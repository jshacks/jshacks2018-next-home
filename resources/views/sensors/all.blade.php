@extends('backpack::layout')

@section('header')
<section class="content-header">
	<h1>
		<span class="text-capitalize">Sensor</span>
	</h1>
	<ol class="breadcrumb">
		<li></li>
	</ol>
</section>
@endsection



@section('content')
<div class="row">
	@foreach('App\Models\Sensor'::all() as $sensor)
	<div class="col-md-6 col-lg-6">
		<div class="box">
			<div class="box-header with-border">
				<!-- Single button -->
				<div class="btn-group pull-right">
					  <!-- <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					   <span>{{ $sensor->name }}</span>
					</button> -->
					<!--   <ul class="dropdown-menu">
					 <li><a href="">dfgsdfg</a></li>
					</ul> -->
				</div>
				<h3 class="box-title" style="line-height: 30px;">{{$sensor->name }}</h3>
				<!-- <h3 class="box-title">Sensor</h3> -->
			</div>
			<div class="box-body row display-flex-wrap" style="display: flex;flex-wrap: wrap;">
				<div class="col-md-12">


					@foreach('App\Models\SensorData'::where('sensor_id', $sensor->id)->orderBy('created_at', 'desc')->limit(3)->get() as $sensorData)

						@if($loop->index==0)
						<strong>
							<h3 class="text-big">{{ $sensorData->val1 }} &nbsp;&nbsp;&nbsp;{{ $sensorData->val2 }} &nbsp;&nbsp;&nbsp;{{ $sensorData->val3 }}</h3>
						</strong>
						@else
						<p>{{ $sensorData->val1 }} &nbsp;&nbsp;&nbsp;{{ $sensorData->val2 }} &nbsp;&nbsp;&nbsp;{{ $sensorData->val3 }}</p>
						@endif

	                @endforeach
					<div class="container"></div>

		    			<!-- <div class="implementations-chart-container">
	                        <div id="implementations-report"></div>
	                    </div> -->
	                    <!-- <h1>Sensor 1</h1> -->
	                </div>
	            </div><!-- /.box-body -->

	            <div class="box-footer">
	            	<p>Status: Active</p>

	            </div><!-- /.box-footer-->
	       	</div><!-- /.box -->

	    <!-- </div> -->
	</div>
	@endforeach
</div>


<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-gl/echarts-gl.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-stat/ecStat.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
<script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=ZUONbpqGBsYGXNIYHicvbAbM"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/simplex.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/4.1.0/echarts-en.common.js"></script>


<style type="text/css">
.container {
	width: 100%;
	height:30vh;
}
</style>
<script>
	var dom = document.getElementsByClassName("container");

	var colors = ["red", "blue", "green"];

	var options = [null, null, null];

	for(var i=0; i<dom.length; i++) {
		options[i] = {
			color: colors[i],
			xAxis: {
				type: 'category',
				data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
			},
			yAxis: {
				type: 'value'
			},
			series: [{
				data: [120 + i, 932 + i, 901, 934, 1290, 1330, 1320 + i*300],
				type: 'line'
			}]
		};
	};


	var myCharts = [null, null, null];

	for(var i=0; i<dom.length; i++) {
		myCharts[i] = echarts.init(dom[i]);
		var app = {};
		// option = null;
		
	
		if (options[i] && typeof options[i] === "object") {
			myCharts[i].setOption(options[i], true);
		}
	}
</script>
@endsection
