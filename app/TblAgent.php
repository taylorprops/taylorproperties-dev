<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblAgent extends Model
{
    // Table Name
    protected $table = 'tbl_agents';

    // Primary Key
   	public $primaryKey = 'agent_id';

   	// Timestamps
   	public $timestamps = false;

   	/**
     * Get the agent of the same agent id
     */
    public function user()
    {
        return $this->belongsTo('App\Agent', 'agent_id', 'agent_id');
    }

}
