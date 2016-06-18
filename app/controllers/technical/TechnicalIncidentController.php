<?php

class TechnicalIncidentController extends AdminController {

	public function getPending(){
		return View::make('/technical/incident/incident_pending');
	}
	public function getComplete(){
		return View::make('/technical/incident/incident_complete');
	}	
}
