@extends('layouts.app')

@section('content')
<h1><span class="fa fa-tachometer"></span> Dashboard</h1>
<h2>Overview</h2>
<div class="block-list">
	<div class="row">
		<div class="col-sm-6">
			<div class="block">
				<div class="icon-holder pink">
					<span class="fa fa-users"></span>
				</div>
				<div class="description">
					<strong class="counter">354</strong>
					<em>visitor count</em>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="block">
				<div class="icon-holder yellow">
					<span class="fa fa-files-o"></span>
				</div>
				<div class="description">
					<strong class="counter">12</strong>
					<em>files</em>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="block">
				<div class="icon-holder green">
					<span class="fa fa-list"></span>
				</div>
				<div class="description">
					<strong class="counter">10</strong>
					<em>to-do list</em>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="block">
				<div class="icon-holder blue">
					<span class="fa fa-cc"></span>
				</div>
				<div class="description">
					<strong class="counter">56</strong>
					<em>Contact</em>
				</div>
			</div>
		</div>
	</div>
</div>
<h2>Achivement Timeline</h2>
<div id="mytimeline"></div>
<!-- <h2>History</h2>
<div class="history-list">
	<div class="history-block">
		<div class="description">
			<em class="date"><time datetime="2016-05-36">26th may 2016</time></em>
			<p>job at rapid web</p>
		</div>
	</div>
</div> -->
@endsection