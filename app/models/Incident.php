<?php

class Incident extends Eloquent {

	use SoftDeletingTrait;

	protected $table = 'incident';
	protected $softDelete = true;


//==============Relation Table================//
	
	public function user(){
		return $this->belongsTo('User','user_id');
	}
	public function incidentStatus(){
		return $this->belongsTo('IncidentStatus');
	}
	public function customer(){
		return $this->belongsTo('Collaborate','customer_id');
	}
	public function partner(){
		return $this->belongsTo('Collaborate','partner_id');
	}

	public function product(){
		return $this->belongsTo('Product')->withTrashed();
	}
//==============End Relation Table================//

	public function ticketNumber(){
		return 'TN' . str_pad($this->id, 10,"0",STR_PAD_LEFT);
	}

}

