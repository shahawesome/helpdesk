<?php

class AjaxPartnerController extends AjaxController {

public function detailPartner($id){
		return Response::json($this->collaborateProvider->listDetailPartner($id));
	}
}