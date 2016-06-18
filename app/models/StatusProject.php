<?php

class StatusProject extends Eloquent {

	use SoftDeletingTrait;

	protected $table = 'status_project';
	protected $softDelete = true;

	//==============Relation Table================//

	public function project(){
		return $this->belongsTo('Project');
	}
	
	//==============End Relation Table================//

}

 