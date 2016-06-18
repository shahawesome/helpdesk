<?php

class Project extends Eloquent {

	use SoftDeletingTrait;

	protected $table = 'project';
	protected $softDelete = true;

	//==============Relation Table================//

	public function product(){
		return $this->belongsToMany('Product','ProjectProduct');
	}

	public function user(){
		return $this->belongsTo('User');
	}

	public function status_project(){
		return $this->hasMany('StatusProject');
	}
	
	//==============End Relation Table================//

}

 