$(function() {
	/* INSERT */
	if ($('.daftar').val() == 'true') {
		$.gritter.add({
			title: 'Insert Successfully!',
			text: 'Your data saved',
			class_name: 'gritter success' + (!$('.daftar').get(0).checked ? ' gritter-light' : '')
		});


		return false;
	}
	if ($('.daftar').val() == 'false') {
		$.gritter.add({
			title: 'Insert Error!',
			text: 'Please try again or contact your administrator',
			class_name: 'gritter error' + (!$('.daftar').get(0).checked ? ' gritter-light' : '')
		});

		return false;
	}

	if ($('.daftar').val() == 'db') {
		$.gritter.add({
			text: 'Database error!',
			text: 'Please make sure all data have been backup',
			class_name: 'gritter warning' + (!$('.daftar').get(0).checked ? 'gritter-light' : '')
		});
		return false;
	}
	/* KEMASKINI */
	if ($('.kemaskini').val() == 'true') {
		$.gritter.add({
			title: 'Update Successfully!',
			text: 'Your data saved',
			class_name: 'gritter success' + (!$('.kemaskini').get(0).checked ? ' gritter-light' : '')
		});

		return false;
	}
	if ($('.kemaskini').val() == 'false') {
		$.gritter.add({
			title: 'Modify data Error!',
			text: 'Please try again or contact your administrator',
			class_name: 'gritter error' + (!$('.kemaskini').get(0).checked ? ' gritter-light' : '')
		});

		return false;
	}

	if ($('.kemaskini').val() == 'db') {
		$.gritter.add({
			text: 'Database error!',
			text: 'Please make sure all data have been backup',
			class_name: 'gritter warning' + (!$('.kemaskini').get(0).checked ? 'gritter-light' : '')
		});
		return false;
	}
	/* PADAM */
	if ($('.padam').val() == 'true') {
		$.gritter.add({
			title: 'Delete Successfully!',
			text: 'Your data was delete from system',
			class_name: 'gritter success' + (!$('.padam').get(0).checked ? ' gritter-light' : '')
		});

		return false;
	}
	if ($('.padam').val() == 'false') {
		$.gritter.add({
			title: 'Delete Error!',
			text: 'Please try again or contact your administrator',
			class_name: 'gritter error' + (!$('.padam').get(0).checked ? ' gritter-light' : '')
		});

		return false;
	}

	if ($('.padam').val() == 'db') {
		$.gritter.add({
			text: 'Database error!',
			text: 'Please make sure all data have been backup',
			class_name: 'gritter warning' + (!$('.padam').get(0).checked ? 'gritter-light' : '')
		});
		return false;
	}
	
	newPotongan2 = $('#newaddress').html();
	$('#btn-add-address').click(function(){
		$('#address').append(newPotongan2);
	});
	$('#address').on("click","#removeaddress",{},function(){		
		$(this).parent().parent().remove();
	});
	
	newPotongan = $('#newJemaah').html();
	$('#btn-add-jemaah').click(function(){
		$('#jemaah').append(newPotongan);
		$('.date').datepicker();
	});
	$('#jemaah').on("click","#removeJemaah",{},function(){		
		$(this).parent().parent().remove();
	});
	
	

})

