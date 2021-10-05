<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<a href="../../index3.html" class="brand-link">
		<img src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Admin</span>
	</a>
	<div class="sidebar">
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-collumn" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>Donatur</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>Keuangan<i class="right fas fa-angle-left"></i></p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="../../index.html" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Pemasukan</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../../index2.html" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Pengeluaran</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="{{route('data_yatim')}}" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>Data Yatim Piatu</p>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</aside>