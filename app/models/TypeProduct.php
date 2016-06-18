<?php

class TypeProduct extends Eloquent {

	use SoftDeletingTrait;

	protected $table = 'type_product';
	protected $softDelete = true;

	//==============Relation Table================//

	public function product(){
		return $this->belongsTo('Product');
	}
	
	//==============End Relation Table================//

}

 