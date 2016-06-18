@extends('basic')

@section('body')

<div class="navbar">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a href="#" class="brand">
				<small><img src="/img/logoie.png" width="20px">  i-Helpdesk</small>
			</a><!--/.brand-->

			<ul class="nav ace-nav pull-right">
				<li class="light-blue">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<img class="nav-user-photo" src="/avatars/user.jpg" alt="Jason's Photo" />
						<span class="user-info">
							<small>Welcome,</small>
							Jason
						</span>

						<i class="icon-caret-down"></i>
					</a>

					<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
						<li>
							<a href="#">
								<i class="icon-cog"></i>
								Settings
							</a>
						</li>

						<li>
							<a href="#">
								<i class="icon-user"></i>
								Profile
							</a>
						</li>

						<li class="divider"></li>

						<li>
							<a href="/logout">
								<i class="icon-off"></i>
								Logout
							</a>
						</li>
					</ul>
				</li>
			</ul><!--/.ace-nav-->
		</div><!--/.container-fluid-->
	</div><!--/.navbar-inner-->
</div>

<div class="main-container container-fluid">
	<a class="menu-toggler" id="menu-toggler" href="#">
		<span class="menu-text"></span>
	</a>

	<div class="sidebar" id="sidebar">

		<ul class="nav nav-list">
			<li class="{{(Request::segment(1)=='technical'&& Request::segment(2)=='')?'active':''}}">
				<a href="/technical">
					<i class="icon-dashboard"></i>
					<span class="menu-text"> Dashboard </span>
				</a>
			</li>
			<!--/pending task menu-->
			<li class="{{(Request::segment(2)=='pending-task')?'active':''}}">
				<a href="/technical/pending-task">
					<i class="icon-question-sign "></i>
					<span class="menu-text">Pending Task 
						@if(Auth::user()->pendingTask()>0)
						<span class="badge badge-success pull-right">{{Auth::user()->pendingTask()}}</span>
						@endif
					</span>
				</a>
			</li>
			<!--/vendor menu-->
			<li class="{{(Request::segment(2)=='vendor')?'open active':''}}">
				<a href="#" class="dropdown-toggle">
					<i class="icon-user"></i>
					<span class="menu-text">Vendor </span>

					<b class="arrow icon-angle-down"></b>
				</a>

				<ul class="submenu">
					<li class="{{(Request::segment(2)=='vendor'&&Request::segment(3)=='list')?'active':''}}">
						<a href="/technical/vendor/list">
							<i class="icon-double-angle-right"></i>
							Vendor List 
						</a>
					</li>

				</ul>
			</li>
			<!--/partner menu-->
			<li class="{{(Request::segment(2)=='partner')?'open active':''}}">
				<a href="#" class="dropdown-toggle">
					<i class="icon-group"></i>
					<span class="menu-text">Partner </span>

					<b class="arrow icon-angle-down"></b>
				</a>

				<ul class="submenu">
					<li class="{{(Request::segment(2)=='partner'&&Request::segment(3)=='list')?'active':''}}">
						<a href="/technical/partner/list">
							<i class="icon-double-angle-right"></i>
							Partner List 
						</a>
					</li>

				</ul>
			</li>
			<!--/customer menu-->
			<li class="{{(Request::segment(2)=='customer')?'open active':''}}">
				<a href="#" class="dropdown-toggle">
					<i class="icon-building"></i>
					<span class="menu-text">Customer </span>

					<b class="arrow icon-angle-down"></b>
				</a>

				<ul class="submenu">
					<li class="{{(Request::segment(2)=='customer'&&Request::segment(3)=='list')?'active':''}}">
						<a href="/technical/customer/list">
							<i class="icon-double-angle-right"></i>
							Customer List 
						</a>
					</li>

				</ul>
			</li>
			<!--/incident menu-->
			<li class="{{(Request::segment(2)=='incident')?'open active':''}}">
				<a href="#" class="dropdown-toggle">
					<i class="icon-list"></i>
					<span class="menu-text">Incident @if(Auth::user()->pendingIncident()>0)
						<span class="badge badge-success pull-right">{{Auth::user()->pendingIncident()}}</span>@endif
					</span>

					<b class="arrow icon-angle-down"></b>
				</a>

				<ul class="submenu">
					<li class="{{(Request::segment(2)=='incident'&&Request::segment(3)=='pending')?'active':''}}">
						<a href="/technical/incident/pending">
							<i class="icon-double-angle-right"></i>
							Pending Incident
						</a>
					</li>

					<li class="{{(Request::segment(2)=='incident'&&Request::segment(3)=='complete')?'active':''}}">
						<a href="/technical/incident/complete">
							<i class="icon-double-angle-right"></i>
							Complete Incident
						</a>
					</li>

				</ul>
			</li>
			<!--/workorder menu-->
			<li class="{{(Request::segment(2)=='workorder')?'open active':''}}">
				<a href="#" class="dropdown-toggle">
					<i class="icon-tasks"></i>
					<span class="menu-text">Work Order </span>

					<b class="arrow icon-angle-down"></b>
				</a>

				<ul class="submenu">
					<li class="{{(Request::segment(2)=='workorder'&&Request::segment(3)=='pending')?'active':''}}">
						<a href="/technical/workorder/pending">
							<i class="icon-double-angle-right"></i>
							Pending Work Order
						</a>
					</li>

					<li class="{{(Request::segment(2)=='workorder'&&Request::segment(3)=='complete')?'active':''}}">
						<a href="/technical/workorder/complete">
							<i class="icon-double-angle-right"></i>
							Complete Work Order
						</a>
					</li>

				</ul>
			</li>
			<!--/project menu-->
			<li class="{{(Request::segment(2)=='project')?'open active':''}}">
				<a href="#" class="dropdown-toggle">
					<i class="icon-paste"></i>
					<span class="menu-text">Project </span>

					<b class="arrow icon-angle-down"></b>
				</a>

				<ul class="submenu">
					<li class="{{(Request::segment(2)=='project'&&Request::segment(3)=='list')?'active':''}}">
						<a href="/technical/project/list">
							<i class="icon-double-angle-right"></i>
							Project List 
						</a>
					</li>

				</ul>
			</li>

		</ul><!--/.nav-list-->

		<div class="sidebar-collapse" id="sidebar-collapse">
			<i class="icon-double-angle-left"></i>
		</div>
	</div>

	<div class="main-content">
		<div class="page-content">
			<div class="row-fluid">
				<div class="span12">
					<!--PAGE CONTENT BEGINS-->
					<div class="row-fluid">
						@yield('content')
					</div><!--PAGE CONTENT ENDS-->
				</div><!--/.span-->
			</div><!--/.row-fluid-->
		</div><!--/.page-content-->
	</div><!--/.main-content-->

</div><!--/.main-container-->

@stop