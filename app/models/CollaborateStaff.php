<?php

class CollaborateStaff extends Eloquent {

	use SoftDeletingTrait;
	
	protected $table = 'collaborate_staff';
	protected $softDelete = true;

	public function collaborate(){
		return $this->belongsTo('Collaborate');
	}
}

