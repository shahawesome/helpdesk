@extends('/basic')

@section('body')

<body class="login-layout">
	<div class="main-container">
		<div class="main-content">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="login-container">
						<div class="center">
							<h1><br></h1><h4 >
							<img src="/img/mainlogo.png" width="80%">

						</h4>								
					</div>
					<div class="space-6"></div>
					<div class="position-relative">
						<div id="login-box" class="login-box visible widget-box no-border">
							<div class="widget-body">
								<div class="widget-main">
									<h4 class="header blue lighter bigger">
										<i class="fa fa-wrench blue"></i>
										Helpdesk System
									</h4>
									<div class="space-6"></div>
									<form action="/login" method="post">
										<fieldset>
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="text" class="form-control" placeholder="Username" name="username">
													<i class="ace-icon fa fa-user"></i>
												</span>
											</label>
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="password" class="form-control" placeholder="Password" name="password">
													<i class="ace-icon fa fa-lock"></i>
												</span>
											</label>
											<div class="space"></div>
											<div class="clearfix">
												<label class="inline">
													<input type="checkbox" class="ace">
													<span class="lbl"> Remember Me</span>
												</label>
												<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
													<i class="ace-icon fa fa-key"></i>
													<span class="bigger-110">Login</span>
												</button>
											</div>
											<div class="space-4"></div>
										</fieldset>
									</form>										
									<div class="space-6"></div>
									<div class="social-login center">																											
									</div>
								</div><!-- /.widget-main -->
								<div class="toolbar clearfix">
									<marquee behavior="scroll" direction="left"><font color="white">The quiter you become, the more you are able to hear</font></marquee>
								</div>
							</div><!-- /.widget-body -->
						</div>
					</div>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.main-content -->
	</div><!-- /.main-container -->
</div>
</body>





@stop

@section('script')

<script type="text/javascript">
	jQuery(function($) {
		$(document).on('click', '.toolbar a[data-target]', function(e) {
			e.preventDefault();
			var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			});
	});
	
</script>
@stop