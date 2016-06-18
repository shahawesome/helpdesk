<?php

class Product extends Eloquent {

	use SoftDeletingTrait;
	
	protected $table = 'product';
	protected $softDelete = true;

//==============Relation Table================//
	public function project(){
		return $this->belongsToMany('Project','ProjectProduct');
	} 
	public function vendor(){
		return $this->belongsTo('Collaborate','vendor_id');
	}
	public function partner(){
		return $this->belongsTo('Collaborate','partner_id');
	}
	public function type_product(){
		return $this->belongsTo('TypeProduct');
	}

	public function collaborate(){
		return $this->belongsTo('Collaborate','customer_id');
	}

	public function productSatus(){
		return $this->hasMany('ProjectProductStatus');
	}
	public function incident(){
		return $this->hasMany('Incident');
	}

//==============End Relation Table================//

//count onsite

	public function balanceOnsite(){
		$totalonsite = count(Incident::where('type','=','1')->get());
		return $this->onsite_support-$totalonsite;

	}
}

 