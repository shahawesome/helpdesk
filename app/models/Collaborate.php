<?php

class Collaborate extends Eloquent  {

	use  SoftDeletingTrait;

	protected $table = 'collaborate';
	protected $softDelete = true;


		public function product(){
		return $this->hasMany('Product');
	}
		public function collaborateStaff(){
		return $this->hasMany('CollaborateStaff');
	}
	public function collaborateAddress(){
		return $this->hasMany('CollaborateAddress');
	}
	public function incident(){
		return $this->hasMany('incident');
	}

}

