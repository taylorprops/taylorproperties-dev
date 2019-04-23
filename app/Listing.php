<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    // Table Name
    protected $table = 'tp_props';

    // Primary Key
   	public $primaryKey = 'ListingId';

   	// Timestamps
   	//public $timestamps = true;

    // If your primary key is not an auto-incrementing value, then you need to let the model know that it's not. Otherwise, it automatically tries to convert the primary key into an integer. If this is not set to false, you cannot pull ListingId with characters (integers work) for agent_profile blade listing URLs 
    public $incrementing = false;

   	public function agent()
    {
        return $this->belongsTo('App\Agent');
    }
}
