<?php

class ProjectProduct extends Eloquent  {

	use SoftDeletingTrait;

	protected $table = 'project_product';
	protected $softDelete = true;

	//==============Relation Table================//
	public function project(){
		return $this->belongsTo('Project');
	}
	public function product(){
		return $this->belongsTo('Product');
	}
	//==============End Relation Table================//

}

