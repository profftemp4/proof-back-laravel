<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table     = 'services';
    protected $fillable = ['names', 'image_name', 'type', 'start_date', 'final_date', 'Observations', 'state'];

    public function stateR() {
        return $this->belongsTo(Listing::class, 'state', 'id')->select('id', 'description');
    }

    public function typeR() {
        return $this->belongsTo(Listing::class, 'type', 'id')->select('id', 'description');
    }

}
