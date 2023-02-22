<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table     = 'customers';
    protected $fillable = ['names', 'image_name', 'document', 'email', 'phone_number', 'Observations', 'state'];

    public function scopeIds($query, $id) {
        return $query->where('id', '=', $id);
    }
    
    public function scopeState($query, $state_id) {
        return $query->where('state', '=', $state_id);
    }
    public function stateR() {
        return $this->belongsTo(Listing::class, 'state', 'id')->select('id', 'description');
    }

    public function services() {
        return $this->hasMany(CustomerServices::class, 'customer_Id', 'id');
      }
}
