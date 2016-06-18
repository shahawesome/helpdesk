<?php

class CollaborateAddress extends Eloquent {

	use SoftDeletingTrait;
	
	protected $table = 'collaborate_address';
	protected $softDelete = true;

	public function collaborate(){
		return $this->belongsTo('Collaborate');
	}
}

