<?php

class AjaxCollaborateController extends AjaxController {

	public function detailCollaborate($id){
		return Response::json($this->collaborateProvider->listDetailCollaborate($id));
	}

	public function collaborateStaff($collaborate_id){
		return Response::json($this->collaborateProvider->listDetailCollaborateStaff($collaborate_id));
	}
}