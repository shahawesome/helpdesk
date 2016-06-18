<?php

Route::group(array('before' => 'admin'), function () {
	Route::controller('/admin/workorder', 'AdminWorkorderController');
	Route::controller('/admin/customer', 'AdminCustomerController');
	Route::controller('/admin/incident', 'AdminIncidentController');
	Route::controller('/admin/report', 'AdminReportController');
	Route::controller('/admin/project', 'AdminProjectController');
	Route::controller('/admin/partner', 'AdminPartnerController');
	Route::controller('/admin/vendor', 'AdminVendorController');
	Route::controller('/admin/user', 'AdminUserController');
	Route::controller('/admin', 'AdminController');
	// Route::any('/admin/ajax/customer/{id}', array('uses' => 'AdminIncidentController@detailCustomer'));
	// Route::controller('/admin/customer', 'AdminIncidentController');
	
});

Route::group(array('before' => 'technical'), function () {
	Route::controller('/technical/workorder', 'TechnicalWorkorderController');
	Route::controller('/technical/incident', 'TechnicalIncidentController');
	Route::controller('/technical/customer', 'TechnicalCustomerController');
	Route::controller('/technical/project', 'TechnicalProjectController');
	Route::controller('/technical/partner', 'TechnicalPartnerController');
	Route::controller('/technical/vendor', 'TechnicalVendorController');
	Route::controller('/technical', 'TechnicalController');
});



Route::get('/ajax/collaborate/{id}', array('uses' => 'AjaxCollaborateController@detailCollaborate'));
Route::get('/ajax/collaboratestaff/{collaborate_id}', array('uses' => 'AjaxCollaborateController@collaborateStaff'));
//Route::get('/ajax/partner/{id}', array('uses' => 'AjaxPartnerController@detailPartner'));
	// Route::controller('/admin/customer', 'AdminIncidentController');
	

Route::controller('/', 'HomeController');