@extends('basic')

@section('body')
<body class="no-skin">
	<div id="navbar" class="navbar navbar-default">
		<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
			<span class="sr-only">Toggle sidebar</span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>
		</button>
		<script type="text/javascript">
			try{ace.settings.check('navbar' , 'fixed')}catch(e){}
		</script>
		<div class="navbar-header pull-left">
			<a href="#" class="navbar-brand">
				<small>
					<img src="/img/logoie.png" width="20px">  i-Helpdesk
				</small>
			</a>
		</div>

		<div class="navbar-buttons navbar-header pull-right" role="navigation">
			<ul class="nav ace-nav">
				<li class="light-blue">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<img class="nav-user-photo" src="/avatars/model.jpg" />
						<span class="user-info">
							<small>Welcome</small>
							{{Auth::user()->name}}
						</span>

						<i class="ace-icon fa fa-caret-down"></i>
					</a>

					<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<li>
							<a href="/admin/user/profile">
								<i class="ace-icon fa fa-userr"></i>
								Profile
							</a>
						</li>

						<li class="divider"></li>

						<li>
							<a href="/logout">
								<i class="ace-icon fa fa-power-off"></i>
								Logout
							</a>
						</li>
					</ul>
				</li>
			</ul><!--/.ace-nav-->
		</div><!--/.container-fluid-->
	</div><!--/.navbar-inner-->
</div>

<div class="main-container" id="main-container">
	<script type="text/javascript">
		try{ace.settings.check('main-container' , 'fixed')}catch(e){}
	</script>

	<div id="sidebar" class="sidebar responsive">
		<script type="text/javascript">
			try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
		</script>

		<ul class="nav nav-list">
			<li class="{{(Request::segment(1)=='admin'&& Request::segment(2)=='')?'active':''}}">
				<a href="/admin">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Dashboard </span>
				</a>
				<b class="arrow"></b>
			</li>
			<!--/User menu-->
			<li class="{{(Request::segment(2)=='user')?'open active':''}}">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-user"></i>
					<span class="menu-text">User </span>

					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				<ul class="submenu">
					<li class="{{(Request::segment(2)=='user'&&Request::segment(3)=='create')?'active':''}}">
						<a href="/admin/user/create">
							<i class="menu-icon fa fa-angle-double-right"></i>
							Create User
						</a>
						<b class="arrow"></b>
					</li>

					<li class="{{(Request::segment(2)=='user'&&Request::segment(3)=='list')?'active':''}}">
						<a href="/admin/user/list">
							<i class="menu-icon fa fa-angle-double-right"></i>
							User List 
						</a>
						<b class="arrow"></b>
					</li>

				</ul>
			</li>
			<!--/vendor menu-->
			<li class="{{(Request::segment(2)=='vendor')?'open active':''}}">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-truck"></i>
					<span class="menu-text">Vendor </span>

					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				<ul class="submenu">
					<li class="{{(Request::segment(2)=='vendor'&&Request::segment(3)=='add')?'active':''}}">
						<a href="/admin/vendor/add">
							<i class="menu-icon fa fa-angle-double-right"></i>
							Add Vendor
						</a>
						<b class="arrow"></b>
					</li>

					<li class="{{(Request::segment(2)=='vendor'&&Request::segment(3)=='list')?'active':''}}">
						<a href="/admin/vendor/list">
							<i class="menu-icon fa fa-angle-double-right"></i>
							Vendor List 
						</a>
						<b class="arrow"></b>
					</li>

				</ul>
			</li>
			<!--/partner menu-->
			<li class="{{(Request::segment(2)=='partner')?'open active':''}}">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-paper-plane"></i>
					<span class="menu-text">Partner </span>

					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				<ul class="submenu">
					<li class="{{(Request::segment(2)=='partner'&&Request::segment(3)=='add')?'active':''}}">
						<a href="/admin/partner/add">
							<i class="menu-icon fa fa-angle-double-right"></i>
							Add Partner
						</a>
						<b class="arrow"></b>
					</li>

					<li class="{{(Request::segment(2)=='partner'&&Request::segment(3)=='list')?'active':''}}">
						<a href="/admin/partner/list">
							<i class="menu-icon fa fa-angle-double-right"></i>
							Partner List 
						</a>
						<b class="arrow"></b>
					</li>

				</ul>
			</li>
			<!--/customer menu-->
			<li class="{{(Request::segment(2)=='customer')?'open active':''}}">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-users"></i>
					<span class="menu-text">Customer </span>

					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				<ul class="submenu">
					<li class="{{(Request::segment(2)=='customer'&&Request::segment(3)=='add')?'active':''}}">
						<a href="/admin/customer/add">
							<i class="menu-icon fa fa-angle-double-right"></i>
							Add Customer
						</a>
					</li>

					<li class="{{(Request::segment(2)=='customer'&&Request::segment(3)=='list')?'active':''}}">
						<a href="/admin/customer/list">
							<i class="menu-icon fa fa-angle-double-right"></i>
							Customer List 
						</a>
					</li>

				</ul>
			</li>
			<!--/project menu-->
			<li class="{{(Request::segment(2)=='project')?'open active':''}}">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-suitcase"></i>
					<span class="menu-text">Project </span>

					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				<ul class="submenu">
					<li class="{{(Request::segment(2)=='project'&&Request::segment(3)=='add')?'active':''}}">
						<a href="/admin/project/add">
							<i class="menu-icon fa fa-angle-double-right"></i>
							New Project
						</a>
						<b class="arrow"></b>
					</li>

					<li class="{{(Request::segment(2)=='project'&&Request::segment(3)=='list')?'active':''}}">
						<a href="/admin/project/list">
							<i class="menu-icon fa fa-angle-double-right"></i>
							Project List 
						</a>
						<b class="arrow"></b>
					</li>

				</ul>
			</li>
			<!--/incident menu-->
			<li class="{{(Request::segment(2)=='incident')?'open active':''}}">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-bolt"></i>
					<span class="menu-text">Incident </span>

					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				<ul class="submenu">
					<li class="{{(Request::segment(2)=='incident'&&Request::segment(3)=='create')?'active':''}}">
						<a href="/admin/incident/create">
							<i class="menu-icon fa fa-angle-double-right"></i>
							Create Incident
						</a>
						<b class="arrow"></b>
					</li>

					<li class="{{(Request::segment(2)=='incident'&&Request::segment(3)=='list')?'active':''}}">
						<a href="/admin/incident/list">
							<i class="menu-icon fa fa-angle-double-right"></i>
							Incident Status
						</a>
						<b class="arrow"></b>
					</li>

				</ul>
			</li>
			<!--/workorder menu-->
			<li class="{{(Request::segment(2)=='workorder')?'open active':''}}">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-pencil-square-o"></i>
					<span class="menu-text">Work Order </span>

					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				<ul class="submenu">
					<li class="{{(Request::segment(2)=='workorder'&&Request::segment(3)=='add')?'active':''}}">
						<a href="/admin/workorder/create">
							<i class="menu-icon fa fa-angle-double-right"></i>
							Create Work Order
						</a>
						<b class="arrow"></b>
					</li>

					<li class="{{(Request::segment(2)=='workorder'&&Request::segment(3)=='list')?'active':''}}">
						<a href="/admin/workorder/list">
							<i class="menu-icon fa fa-angle-double-right"></i>
							Work Order Status
						</a>
						<b class="arrow"></b>
					</li>

				</ul>
			</li>
			<!--/report menu-->
			<li class="{{(Request::segment(2)=='report')?'open active':''}}">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-newspaper-o"></i>
					<span class="menu-text">Report </span>
					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				<ul class="submenu">
					<li class="{{(Request::segment(2)=='report'&&Request::segment(3)=='project-list')?'active':''}}">
						<a href="/admin/report/project-list">
							<i class="menu-icon fa fa-angle-double-right"></i>
							Project List
						</a>
						<b class="arrow"></b>
					</li>
					<li class="{{(Request::segment(2)=='report'&&Request::segment(3)=='service-report')?'active':''}}">
						<a href="/admin/report/service-report">
							<i class="menu-icon fa fa-angle-double-right"></i>
							Service Report List
						</a>
						<b class="arrow"></b>
					</li>

					<li class="{{(Request::segment(2)=='report'&&Request::segment(3)=='expired-list')?'active':''}}">
						<a href="/admin/report/expired-list">
							<i class="menu-icon fa fa-angle-double-right"></i>
							Expired Project List
						</a>
						<b class="arrow"></b>
					</li>

				</ul>
			</li>
		</ul><!--/.nav-list-->
		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>

		<script type="text/javascript">
			try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
		</script>
	</div>

	<div class="main-content">
		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">
					<!--PAGE CONTENT BEGINS-->
					
					@yield('content')
					<!--PAGE CONTENT ENDS-->
				</div><!--/.span-->
			</div><!--/.row-fluid-->
		</div><!--/.page-content-->
	</div><!--/.main-content-->
	<!-- footer -->
	<div class="footer">
		<div class="footer-inner">
			<div class="footer-content">
				<span class="bigger-120">
					<span class="blue bolder">Helpdesk</span>
					Application &copy; 2015
				</span>				
			</div>
		</div>
	</div>


</div><!--/.main-container-->

</body>
@stop

@section('script')
<script type="text/javascript">
	jQuery(function($) {
		//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
					$('#tasks').on('touchstart', function(e){
						var li = $(e.target).closest('#tasks li');
						if(li.length == 0)return;
						var label = li.find('label.inline').get(0);
						if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
					});

				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
				}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});


				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();

					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});

			})
</script>
@stop