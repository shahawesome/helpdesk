<?php


class Workorder extends Eloquent {

	use UserTrait, RemindableTrait, SoftDeletingTrait;

	protected $table = 'workorder';
	protected $softDelete = true;

	public function workOrder(){
		return 'WO' .str_pad($this->id,10,"0",STR_PAD_LEFT);
	}

}

