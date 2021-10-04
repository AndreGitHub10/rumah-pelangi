@extends('admin.layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-header border-0">
				<div class="d-flex justify-content-between">
					<h3 class="card-title">Pemasukan bulan ini</h3>
					<a href="javascript:void(0);">Lihat detail</a>
				</div>
			</div>
			<div class="card-body">
				<div class="d-flex">
					<p class="d-flex flex-column">
						<span class="text-bold text-lg">0</span>
						<span>Sumbangan</span>
					</p>
				</div>
				<div class="position-relative mb-4">
					<div class="chartjs-size-monitor">
						<canvas id="pemasukan-chart" class="chartjs-render-monitor"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="card">
			<div class="card-header border-0">
				<div class="d-flex justify-content-between">
					<h3 class="card-title">Pengeluaran bulan ini</h3>
					<a href="javascript:void(0);">Lihat detail</a>
				</div>
			</div>
			<div class="card-body">
				<div class="d-flex">
					<p class="d-flex flex-column">
						<span class="text-bold text-lg">0</span>
						<span>Digunakan</span>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
<script type="text/javascript">
	
var ctx = document.getElementById('pemasukan-chart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: 'Jumlah Donasi',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

</script>
@stop