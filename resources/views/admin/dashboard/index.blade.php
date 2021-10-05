@extends('admin.layouts.app')

@section('css')

@stop

@section('content')
<div class="row">
	<div class="col-lg-3 col-6">
		<div class="small-box bg-success">
			<div class="inner">
				<h3><?php echo count($pemasukan); ?></h3>
				<p>Data Yatim</p>
			</div>
			<div class="icon">
				<i class="fas fa-users"></i>
			</div>
			<a href="#" class="small-box-footer">
			Info Lanjut <i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-6">
		<div class="small-box bg-danger">
			<div class="inner">
				<h3>50</h3>
				<p>Donatur</p>
			</div>
			<div class="icon">
				<i class="fas fa-users"></i>
			</div>
			<a href="{{ route('donatur') }}" class="small-box-footer">
			More info <i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-6 col-6">
		<div class="small-box bg-info">
			<div class="inner">
				<h3>Rp 15.000.000</h3>
				<p>Saldo Donasi</p>
			</div>
			<div class="icon">
				<i class="fas fa-money-bill-wave"></i>
			</div>
			<a href="#" class="small-box-footer">
			More info <i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="card">
			<div class="card-header border-0">
				<div class="d-flex justify-content-between">
					<h3 class="card-title">Pemasukan bulan ini</h3>
					<a href="{{ route('pemasukan') }}">Lihat detail</a>
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
					<a href="{{ route('pengeluaran') }}">Lihat detail</a>
				</div>
			</div>
			<div class="card-body">
				<div class="d-flex">
					<p class="d-flex flex-column">
						<span class="text-bold text-lg">0</span>
						<span>Digunakan</span>
					</p>
				</div>
				<div class="position-relative mb-4">
					<canvas id="pengeluaran-chart" class="chartjs-render-monitor"></canvas>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>
<script type="text/javascript">
	var pem = document.getElementById('pemasukan-chart').getContext('2d');
	var chart = new Chart(pem, {
        // The type of chart we want to create
        type: 'line',
        // The data for our dataset
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Pemasukan',
                backgroundColor: 'rgb(144, 255, 140)',
                borderColor: 'rgb(33, 125, 29)',
                data: [0, 1000000, 500000, 200000, 2000000, 3000000, 4500000]
            }]
        },
        // Configuration options go here
        options: {
			scales: {
				x: {
					beginAtZero: true
				}
			}
        }
    });
    var peng = document.getElementById('pengeluaran-chart').getContext('2d');
	var chart = new Chart(peng, {
        // The type of chart we want to create
        type: 'line',
        // The data for our dataset
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Pengeluaran',
                backgroundColor: 'rgb(255, 140, 151)',
                borderColor: 'rgb(184, 42, 56)',
                data: [0, 700000, 400000, 100000, 1000000, 3500000, 4000000]
            }]
        },
        // Configuration options go here
        options: {}
    });
// 	const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
// const data = {
//   labels: labels,
//   datasets: [{
//     label: 'My First dataset',
//     backgroundColor: 'rgba(54, 162, 235, 0.5)',
//     borderColor: 'rgb(54, 162, 235)',
//     borderWidth: 1,
//     data: [10, 20, 30, 40, 50, 0, 5],
//   }]
// };
// const config = {
//   type: 'line',
//   data,
//   options: {
//     scales: {
//       x: {
//         grid: {
//           borderColor: 'red'
//         }
//       }
//     }
//   }
// };
	// var text = moment().add(-1, 'months').format("MMM");
	// $('.myPanel').html(text)
//   var data = [{
//       x: new moment().add(-5, 'months'),
//       y: Math.random() * 100
//     },
//     {
//       x: new moment().add(-4, 'months'),
//       y: Math.random() * 100
//     },
//     {
//       x: new moment().add(-3, 'months'),
//       y: Math.random() * 100
//     },
//     {
//       x: new moment().add(-2, 'months'),
//       y: Math.random() * 100
//     },
//     {
//       x: new moment().add(-1, 'months'),
//       y: Math.random() * 100
//     },
//     {
//       x: new moment().add(-0, 'months'),
//       y: Math.random() * 100
//     },
//     {
//       x: new moment().add(1, 'months'),
//       y: Math.random() * 100
//     },
//   ];

// var pem = document.getElementById('pemasukan-chart').getContext('2d');
// var chart = new Chart(pem, {
//     type: 'line',
//     data: {
//       datasets: [{
//         data: data,
//         borderColor: "#3e95cd",
//         fill: false
//       }]
//     },
//     options: {
//       scales: {
//         xAxes: [{
//           type: 'time'
//         }]
//       },
//       legend: false
//     }
//   });

// var peng = document.getElementById('pengeluaran-chart').getContext('2d');
// var chart = new Chart(peng, {
//     type: 'line',
//     data: {
//       datasets: [{
//         data: data,
//         borderColor: "#3e95cd",
//         fill: false
//       }]
//     },
//     options: {
//       scales: {
//         xAxes: [{
//           type: 'time'
//         }]
//       },
//       legend: false
//     }
//   });
</script>

@stop