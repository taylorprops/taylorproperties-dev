<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TPLocation extends Model
{
    // Table Name
    protected $table = 'tp_locations';

    // Primary Key
   	public $primaryKey = 'id';

   	// Timestamps
   	public $timestamps = true;
}
