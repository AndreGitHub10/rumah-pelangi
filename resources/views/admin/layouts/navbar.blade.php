<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
		<li class="nav-item">
			<a class="nav-link navbar-brand">Home</a>
		</li>
	</ul>
	<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-power-off nav-icon"></i>&nbsp Keluar</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
		</li>
	</ul>
</nav>