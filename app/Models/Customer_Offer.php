<?php

namespace app\Models;

use Eloquent;
use app\Models\Deal;

class Customer_Offer extends Eloquent
{
    protected $table = 'customer_offers';
    protected $primaryKey = 'id';
    public $timestamps = true;
	
	public function deal()
    {
        return $this->belongsTo(Deal::class, 'deal_id');
    }
}
