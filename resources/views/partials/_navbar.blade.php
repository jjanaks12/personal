@if(Auth::check())
<header id="header">
	<nav class="navbar navbar-default" id="nav">
		<div class="container-fluid">
			<a class="navbar-brand" href="/home">{{ Auth::user()->name }}</a>
			<a class="dashboard" href="/home"><span class="fa fa-tachometer"></span> Dashboard</a>
			<ul class="nav navbar-nav pull-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user"></span> {{ Auth::user()->name }} <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li><a href="/logout"><span class="fa fa-sign-out"></span> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>
@endif