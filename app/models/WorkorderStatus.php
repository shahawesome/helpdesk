<?php

class WorkorderStatus extends Eloquent  {

	use SoftDeletingTrait;

	protected $table = 'workorder_status';
	protected $softDelete = true;

}

