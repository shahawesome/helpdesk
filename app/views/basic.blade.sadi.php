<!DOCTYPE html>
<html lang="en"> 
<head> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Helpdesk System</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<link rel="stylesheet" href="/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/font-awesome/4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="/css/jquery-ui.custom.min.css" />
	<link rel="stylesheet" href="/fonts/fonts.googleapis.com.css" />
	<link rel="stylesheet" href="/css/jquery.gritter.min.css" />
	<link rel="stylesheet" href="/css/chosen.min.css" />
	<link rel="stylesheet" href="/css/datepicker.min.css" />
	<link rel="stylesheet" href="/css/bootstrap-timepicker.min.css" />
	<link rel="stylesheet" href="/css/daterangepicker.min.css" />
	<link rel="stylesheet" href="/css/bootstrap-datetimepicker.min.css" />
	<link rel="stylesheet" href="/css/colorpicker.min.css" />
	<link rel="stylesheet" href="/css/ace-rtl.min.css" />
	<link rel="stylesheet" href="/css/ace.min.css"  class="ace-main-stylesheet" id="main-ace-style"/>


</head>



@yield('style')

<body>

	@yield('body')
	@include('statusMessage')
	<script type="text/javascript">
		if('ontouchstart' in document.documentElement) document.write("<script src='/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
	</script>

	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse display">
		<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
	</a>
	
	<script src="/js/jquery.1.11.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	
	<script src="/js/jquery-ui.custom.min.js"></script>
	<script src="/js/jquery.ui.touch-punch.min.js"></script>
	<script src="/js/jquery-ui.min.js"></script>
	<script src="/js/bootbox.min.js"></script>
	<script src="/js/fuelux.spinner.min.js"></script>
	<script src="/js/bootstrap-datepicker.min.js"></script>
	<script src="/js/bootstrap-timepicker.min.js"></script>
	<script src="/js/moment.min.js"></script>
	<script src="/js/jquery.gritter.min.js"></script>
	<script src="/js/daterangepicker.min.js"></script>
	<script src="/js/bootstrap-datetimepicker.min.js"></script>
	<script src="/js/bootstrap-colorpicker.min.js"></script>
	<script src="/js/jquery.knob.min.js"></script>
	<script src="/js/jquery.autosize.min.js"></script>
	<script src="/js/jquery.inputlimiter.1.3.1.min.js"></script>
	<script src="/js/jquery.maskedinput.min.js"></script>
	<script src="/js/bootstrap-tag.min.js"></script>
	<script src="/js/ace-extra.min.js"></script>
	<script src="/js/jquery.easypiechart.min.js"></script>
	<script src="/js/jquery.sparkline.min.js"></script>
	<script src="/js/jquery.flot.min.js"></script>
	<script src="/js/jquery.flot.pie.min.js"></script>
	<script src="/js/jquery.flot.resize.min.js"></script>
	<script src="/js/custom.js"></script>
	<script src="/js/chosen.jquery.min.js"></script>
	<script src="/js/spin.min.js"></script>
	<!-- // <script src="/js/jquery.dataTables.min.js"></script> -->
	<script src="/js/jquery.dataTables.bootstrap.min.js"></script>
	<script src="/js/dataTables.tableTools.min.js"></script>
	<script src="/js/dataTables.colVis.min.js"></script>
	<script src="/js/ace-elements.min.js"></script>
	<script src="/js/ace.min.js"></script> 


	<script type="text/javascript">

		jQuery(function($) {
			if(!ace.vars['touch']) {
				$('.chosen-select').chosen({allow_single_deselect:true}); 
					//resize the chosen on window resize
					$(window)
					.off('resize.chosen')
					.on('resize.chosen', function() {
						$('.chosen-select').each(function() {
							var $this = $(this);
							$this.next().css({'width': $this.parent().width()});
						})
					}).trigger('resize.chosen');
					//resize chosen on sidebar collapse/expand
					$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
						if(event_name != 'sidebar_collapsed') return;
						$('.chosen-select').each(function() {
							var $this = $(this);
							$this.next().css({'width': $this.parent().width()});
						})
					});

				}

				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})

				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});

				$('.input-daterange').datepicker({autoclose:true});

				$('input[name=date-range-picker]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				})
				.prev().on(ace.click_event, function(){
					$(this).next().focus();
				});


				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});

				$('#date-timepicker1').datetimepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});

				$(document).one('ajaxloadstart.page', function(e) {
					$('textarea[class*=autosize]').trigger('autosize.destroy');
					$('.limiterBox,.autosizejs').remove();
					$('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
				});


				//initiate dataTables plugin
				var oTable1 = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.dataTable( {
					bAutoWidth: false,
					"aoColumns": [
					{ "bSortable": false },
					null, null,null, null, null,
					{ "bSortable": false }
					],
					"aaSorting": [],

				} );
				//oTable1.fnAdjustColumnSizing();


				//TableTools settings
				TableTools.classes.container = "btn-group btn-overlap";
				TableTools.classes.print = {
					"body": "DTTT_Print",
					"info": "tableTools-alert gritter-item-wrapper gritter-info gritter-center white",
					"message": "tableTools-print-navbar"
				}

				//initiate TableTools extension
				var tableTools_obj = new $.fn.dataTable.TableTools( oTable1, {
					"sSwfPath": "/swf/copy_csv_xls_pdf.swf",
					
					"sRowSelector": "td:not(:last-child)",
					"sRowSelect": "multi",
					"fnRowSelected": function(row) {
						//check checkbox when row is selected
						try { $(row).find('input[type=checkbox]').get(0).checked = true }
						catch(e) {}
					},
					"fnRowDeselected": function(row) {
						//uncheck checkbox
						try { $(row).find('input[type=checkbox]').get(0).checked = false }
						catch(e) {}
					},

					"sSelectedClass": "success",
					"aButtons": [
					{
						"sExtends": "copy",
						"sToolTip": "Copy to clipboard",
						"sButtonClass": "btn btn-white btn-primary btn-bold",
						"sButtonText": "<i class='fa fa-copy bigger-110 pink'></i>",
						"fnComplete": function() {
							this.fnInfo( '<h3 class="no-margin-top smaller">Table copied</h3>\
								<p>Copied '+(oTable1.fnSettings().fnRecordsTotal())+' row(s) to the clipboard.</p>',
								1500
								);
						}
					},

					{
						"sExtends": "csv",
						"sToolTip": "Export to CSV",
						"sButtonClass": "btn btn-white btn-primary  btn-bold",
						"sButtonText": "<i class='fa fa-file-excel-o bigger-110 green'></i>"
					},

					{
						"sExtends": "pdf",
						"sToolTip": "Export to PDF",
						"sButtonClass": "btn btn-white btn-primary  btn-bold",
						"sButtonText": "<i class='fa fa-file-pdf-o bigger-110 red'></i>"
					},

					{
						"sExtends": "print",
						"sToolTip": "Print view",
						"sButtonClass": "btn btn-white btn-primary  btn-bold",
						"sButtonText": "<i class='fa fa-print bigger-110 grey'></i>",

						"sMessage": "<div class='navbar navbar-default'><div class='navbar-header pull-left'><a class='navbar-brand' href='#'><small>Optional Navbar &amp; Text</small></a></div></div>",

						"sInfo": "<h3 class='no-margin-top'>Print view</h3>\
						<p>Please use your browser's print function to\
							print this table.\
							<br />Press <b>escape</b> when finished.</p>",
						}
						]
					} );
				//we put a container before our table and append TableTools element to it
				$(tableTools_obj.fnContainer()).appendTo($('.tableTools-container'));
				
				
				setTimeout(function() {
					$(tableTools_obj.fnContainer()).find('a.DTTT_button').each(function() {
						var div = $(this).find('> div');
						if(div.length > 0) div.tooltip({container: 'body'});
						else $(this).tooltip({container: 'body'});
					});
				}, 200);
				
				
				
				//ColVis extension
				var colvis = new $.fn.dataTable.ColVis( oTable1, {
					"buttonText": "<i class='fa fa-search'></i>",
					"aiExclude": [0, 6],
					"bShowAll": true,
					//"bRestore": true,
					"sAlign": "right",
					"fnLabel": function(i, title, th) {
						return $(th).text();//remove icons, etc
					}
					
				}); 
				
				//style it
				$(colvis.button()).addClass('btn-group').find('button').addClass('btn btn-white btn-info btn-bold')
				
				//and append it to our table tools btn-group, also add tooltip
				$(colvis.button())
				.prependTo('.tableTools-container .btn-group')
				.attr('title', 'Show/hide columns').tooltip({container: 'body'});
				
				//and make the list, buttons and checkboxed Ace-like
				$(colvis.dom.collection)
				.addClass('dropdown-menu dropdown-light dropdown-caret dropdown-caret-right')
				.find('li').wrapInner('<a href="javascript:void(0)" />') //'A' tag is required for better styling
				.find('input[type=checkbox]').addClass('ace').next().addClass('lbl padding-8');


				
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) tableTools_obj.fnSelect(row);
						else tableTools_obj.fnDeselect(row);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(!this.checked) tableTools_obj.fnSelect(row);
					else tableTools_obj.fnDeselect($(this).closest('tr').get(0));
				});
				

				
				
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});

				

				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $source.offset();
					//var w2 = $source.width();

					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}

				window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");


			});

</script>




@yield('script')


</body>

</html>
