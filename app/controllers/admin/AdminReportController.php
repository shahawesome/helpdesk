<?php

class AdminReportController extends AdminController {

	public function getProjectList(){
		return View::make('/admin/report/project_list');
	}

	public function getServiceReport(){
		return View::make('/admin/report/service_report');
	}
	public function getExpiredList(){
		return View::make('/admin/report/expired_list');
	}
}
