<?php

class IncidentStatus extends Eloquent {

	use SoftDeletingTrait;

	protected $table = 'incident_status';
	protected $softDelete = true;

		public function incident(){
		return $this->hasMany('Incident');
	}

}

