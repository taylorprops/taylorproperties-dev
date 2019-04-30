<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    // Table Name
    protected $table = 'tp_agents';

    // Primary Key
   	public $primaryKey = 'agent_id';

   	// Timestamps
   	public $timestamps = false;

   	public function listings()
    {
        return $this->hasMany('App\Listings');
    }

    public function tblagent()
    {
        return $this->hasOne('App\TblAgent', 'agent_id', 'agent_id');
    }
}
