@extends('/admin/template')

@section('content')
<div class="page-header position-relative">
	<h1>
		Dashboard
	</h1>
</div>


<div class="widget-box ">
	<div class="widget-header ui-sortable-handle">
		<h4 class="widget-title lighter smaller">
			<i class="fa fa-tasks blue"></i>
			Current Progress Project
		</h4>

		<div class="widget-toolbar">
			<a href="#" data-action="reload">
				<i class="ace-icon fa fa-refresh"></i>
			</a>
			<a href="#" data-action="fullscreen" class="orange2">
				<i class="ace-icon fa fa-expand"></i>
			</a>
		</div>
	</div>

	<div class="widget-body">
		<div class="widget-main padding-4 scrollable ace-scroll" data-size="180px" style="position: relative;">
			<div class="scroll-track scroll-active" style="display: block; height: 8px;">
				<div class="scroll-bar" style="height: 8px; top: 0px;">
				</div>
			</div>
			<div class="scroll-content" style="max-height: 100%;">
				<div class="content">
					<table class="table table-striped table-hover no-margin-bottom no-border-top">
						<thead>
							<tr>
								<th>No</th>
								<th>Project Name</th>
								<th>Product</th>
								<th>Phase</th>
								<th>Completion</th>
							</tr>
						</thead>
						<tr>
							<td>1</td>
							<td>EDMS</td>
							<td>Netbackup</td>
							<td>Implementation</td>
							<td >
								<div class="progress pos-rel" data-percent="66%" style="margin-bottom:0px;">
									<div class="progress-bar" style="width:66%;"></div>
								</div>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>DSAD</td>
							<td>VMware</td>
							<td>Documentation</td>
							<td>
								<div class="progress pos-rel" data-percent="10%" style="margin-bottom:0px;">
									<div class="progress-bar" style="width:10%;"></div>
								</div>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>MMS</td>
							<td>Netapp</td>
							<td>Delivery</td>
							<td>
								<div class="progress pos-rel" data-percent="40%" style="margin-bottom:0px;">
									<div class="progress-bar" style="width:40%;"></div>
								</div>
							</td>
						</tr>
						<tr>
							<td>4</td>
							<td>EDMS</td>
							<td>Netbackup</td>
							<td>Implemetation</td>
							<td>
								<div class="progress pos-rel" data-percent="70%" style="margin-bottom:0px;">
									<div class="progress-bar" style="width:70%;"></div>
								</div>
							</td>
						</tr>
						<tr>
							<td>5</td>
							<td>PPSAS</td>
							<td>VMware</td>
							<td>Documentation</td>
							<td>
								<div class="progress pos-rel" data-percent="50%" style="margin-bottom:0px;">
									<div class="progress-bar" style="width:50%;"></div>
								</div>
							</td>
						</tr>
						<tr>
							<td>6</td>
							<td>WQEWDSAD</td>
							<td>Netbackup</td>
							<td>Delivery</td>
							<td>
								<div class="progress pos-rel" data-percent="66%" style="margin-bottom:0px;">
									<div class="progress-bar" style="width:66%;"></div>
								</div>
							</td>
						</tr>
						<tr>
							<td>7</td>
							<td>LAFJSAMSA</td>
							<td>VMware</td>
							<td>Documentation</td>
							<td>
								<div class="progress pos-rel" data-percent="80%" style="margin-bottom:0px;">
									<div class="progress-bar" style="width:80%;"></div>
								</div>
							</td>
						</tr>
						<tr>
							<td>8</td>
							<td>SAIDSADSAD</td>
							<td>Netapp</td>
							<td>Implementation</td>
							<td>
								<div class="progress pos-rel" data-percent="63%" style="margin-bottom:0px;">
									<div class="progress-bar" style="width:63%;"></div>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="widget-box">
			<div class="widget-header ui-sortable-handle">
				<h4 class="widget-title lighter smaller">
					<i class="fa fa-sitemap blue"></i>
					Current Preventive Maintenance
				</h4>
				<div class="widget-toolbar">
					<a href="#" data-action="reload">
						<i class="ace-icon fa fa-refresh"></i>
					</a>
					<a href="#" data-action="fullscreen" class="orange2">
						<i class="ace-icon fa fa-expand"></i>
					</a>
				</div>
			</div>
			<div class="widget-body">
				<div class="widget-main padding-4 scrollable ace-scroll" data-size="200px" style="position: relative;">
					<div class="scroll-track scroll-active" style="display: block; height: 8px;">
						<div class="scroll-bar" style="height: 8px; top: 0px;">
						</div>
					</div>
					<div class="scroll-content" style="max-height: 100%;">
						<div class="content">
							<table class="table table-striped table-hover no-margin-bottom no-border-top">
								<thead>
									<tr>
										<th>No</th>
										<th>Customer Name</th>
										<th>Product</th>
										<th>Assign Engineer</th>
										<th>Date</th>
									</tr>
								</thead>
								<tr>
									<td>1</td>
									<td>FECRA</td>
									<td>Netapp</td>
									<td>Shah</td>
									<td >
										<span class="label label-grey">
											10 Feb 2015
										</span>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>UMT</td>
									<td>Netapp</td>
									<td>Hamzah</td>
									<td >
										<span class="label label-grey">
											28 March 2015
										</span>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td>MARA</td>
									<td>Netbackup</td>
									<td>Dzul</td>
									<td >
										<span class="label label-grey">
											14 June 2015
										</span>
									</td>
								</tr>
								<tr>
									<td>4</td>
									<td>MINDEF</td>
									<td>Netapp</td>
									<td>Syahir</td>
									<td >
										<span class="label label-grey">
											20 July 2015
										</span>
									</td>
								</tr>
								<tr>
									<td>5</td>
									<td>MINDEF</td>
									<td>Netapp</td>
									<td>Syahir</td>
									<td >
										<span class="label label-grey">
											12 August 2015
										</span>
									</td>
								</tr>
								<tr>
									<td>6</td>
									<td>MINDEF</td>
									<td>Netapp</td>
									<td>Syahir</td>
									<td >
										<span class="label label-grey">
											13 September 2015
										</span>
									</td>
								</tr>

							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="col-sm-6">
		<div class="widget-box">
			<div class="widget-header ui-sortable-handle">
				<h4 class="widget-title lighter smaller">
					<i class="fa fa-wrench blue"></i>
					Current Open Case
				</h4>
				<div class="widget-toolbar">
					<a href="#" data-action="reload">
						<i class="ace-icon fa fa-refresh"></i>
					</a>
					<a href="#" data-action="fullscreen" class="orange2">
						<i class="ace-icon fa fa-expand"></i>
					</a>
				</div>
			</div>
			<div class="widget-body">
				<div class="widget-main padding-4 scrollable ace-scroll" data-size="200px" style="position: relative;">
					<div class="scroll-track scroll-active" style="display: block; height: 8px;">
						<div class="scroll-bar" style="height: 8px; top: 0px;">
						</div>
					</div>
					<div class="scroll-content" style="max-height: 100%;">
						<div class="content">
							<table class="table table-striped table-hover no-margin-bottom no-border-top">
								<thead>
									<tr>
										<th>No</th>
										<th>Customer Name</th>
										<th>Product</th>
										<th>Assign Engineer</th>
										<th>Days</th>
									</tr>
								</thead>
								<tr>
									<td>1</td>
									<td>AG</td>
									<td>Netbackup</td>
									<td>Syahir</td>
									<td >
										<span class="label label-warning">
											2 days
										</span>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>KPKT</td>
									<td>VMware</td>
									<td>Dzul</td>
									<td >
										<span class="label label-warning">
											5 days
										</span>
									</td>
								</tr>

								<tr>
									<td>3</td>
									<td>NRE</td>
									<td>Netapp</td>
									<td>Syahir</td>
									<td >
										<span class="label label-warning">
											1 days
										</span>
									</td>
								</tr>

								<tr>
									<td>4</td>
									<td>MAMPU</td>
									<td>Netapp</td>
									<td>Hamzah</td>
									<td >
										<span class="label label-warning">
											8 days
										</span>
										
									</td>
								</tr>
								<tr>
									<td>5</td>
									<td>MAMPU</td>
									<td>Netapp</td>
									<td>Hamzah</td>
									<td >
										<span class="label label-warning">
											15 days
										</span>
									</td>
								</tr>
								<tr>
									<td>6</td>
									<td>MAMPU</td>
									<td>Netapp</td>
									<td>Hamzah</td>
									<td >
										<span class="label label-warning">
											20 days
										</span>
									</td>
								</tr>
								<tr>
									<td>7</td>
									<td>MAMPU</td>
									<td>Netapp</td>
									<td>Hamzah</td>
									<td >
										<span class="label label-warning">
											14 days
										</span>
									</td>
								</tr>

							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@stop


@section('script')
<script type="text/javascript">
	jQuery(function($) {


				// scrollables
				$('.scrollable').each(function () {
					var $this = $(this);
					$(this).ace_scroll({
						size: $this.attr('data-size') || 100,
						//styleClass: 'scroll-left scroll-margin scroll-thin scroll-dark scroll-light no-track scroll-visible'
					});
				});
				$('.scrollable-horizontal').each(function () {
					var $this = $(this);
					$(this).ace_scroll(
					{
						horizontal: true,
						styleClass: 'scroll-top',//show the scrollbars on top(default is bottom)
						size: $this.attr('data-size') || 500,
						mouseWheelLock: true
					}
					).css({'padding-top': 12});
				});
				
				$(window).on('resize.scroll_reset', function() {
					$('.scrollable-horizontal').ace_scroll('reset');
				});

				
				$('#id-checkbox-vertical').prop('checked', false).on('click', function() {
					$('#widget-toolbox-1').toggleClass('toolbox-vertical')
					.find('.btn-group').toggleClass('btn-group-vertical')
					.filter(':first').toggleClass('hidden')
					.parent().toggleClass('btn-toolbar')
				});


				$('.widget-container-col').sortable({
					connectWith: '.widget-container-col',
					items:'> .widget-box',
					handle: ace.vars['touch'] ? '.widget-header' : false,
					cancel: '.fullscreen',
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'widget-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					start: function(event, ui) {
						//when an element is moved, it's parent becomes empty with almost zero height.
						//we set a min-height for it to be large enough so that later we can easily drop elements back onto it
						ui.item.parent().css({'min-height':ui.item.height()})
						//ui.sender.css({'min-height':ui.item.height() , 'background-color' : '#F5F5F5'})
					},
					update: function(event, ui) {
						ui.item.parent({'min-height':''})
						//p.style.removeProperty('background-color');
					}
				});
				


			});
</script>

@stop