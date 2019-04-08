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
}
