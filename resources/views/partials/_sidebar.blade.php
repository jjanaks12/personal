@if(Auth::check())
<aside id="sidebar">
	<ul class="nav nav-stacked">
		<li {{ Request::is('profile') ? 'class=active' : "" }}><a href="#"><span class="fa fa-user"></span> Profile</a></li>
		<li {{ Request::is('contact') ? 'class=active' : "" }}><a href="contact"><span class="fa fa-cc"></span> Contact</a></li>
		<li {{ Request::is('career') ? 'class=active' : "" }}><a href="#"><span class="fa fa-black-tie"></span> Career</a></li>
		<li {{ Request::is('files') ? 'class=active' : "" }}><a href="#"><span class="fa fa-files-o"></span> Files</a></li>
		<li {{ Request::is('report') ? 'class=active' : "" }}><a href="#"><span class="fa fa-wpforms"></span> Report</a></li>
		<li {{ Request::is('social') ? 'class=active' : "" }}><a href="#"><span class="fa fa-share-alt-square"></span> Social</a></li>
		<li {{ Request::is('to-do-list') ? 'class=active' : "" }}><a href="#"><span class="fa fa-list"></span> To do List</a></li>
	</ul>
</aside>
@endif