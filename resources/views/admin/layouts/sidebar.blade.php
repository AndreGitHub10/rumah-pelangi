<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<a href="../../index3.html" class="brand-link">
		<img src="{{ asset('img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">{{ Auth::user()->name }}</span>
	</a>
	<div class="sidebar">
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-collumn" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="{{ route('home') }}" class="nav-link <?php if($db_active == "dashboard"){ echo "active"; } ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('donatur') }}" class="nav-link <?php if($db_active == "donatur"){ echo "active"; } ?>">
						<i class="nav-icon fas fa-users"></i>
						<p>Donatur</p>
					</a>
				</li>
				<li class="nav-item <?php if($db_active == "keuangan"){ echo "menu-open"; } ?>">
					<a href="#" class="nav-link <?php if($db_active == "keuangan"){ echo "active"; } ?>">
						<i class="nav-icon fas fa-donate"></i>
						<p>Keuangan<i class="right fas fa-angle-right"></i></p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('pemasukan') }}" class="nav-link <?php if($sub_db_active == "pemasukan"){ echo "active"; } ?>">
							<i class="far fa-circle nav-icon"></i>
							<p>Pemasukan</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('pengeluaran') }}" class="nav-link <?php if($sub_db_active == "pengeluaran"){ echo "active"; } ?>">
							<i class="far fa-circle nav-icon"></i>
							<p>Pengeluaran</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link <?php if($db_active == "data_yatim"){ echo "active"; } ?>">
						<i class="nav-icon fas fa-users"></i>
						<p>Data Yatim Piatu</p>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</aside>