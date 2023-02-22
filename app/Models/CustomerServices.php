<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerServices extends Model
{
    protected $table     = 'customer_services';
    protected $fillable = ['customer_Id', 'service_Id', 'state'];

    public function stateR() {
        return $this->belongsTo(Listing::class, 'state', 'id')->select('id', 'description');
    }

    public function customerid() {
        return $this->belongsTo(Customer::class, 'customer_Id', 'id');
    }

    public function serviceidR() {
        return $this->belongsTo(Service::class, 'service_Id', 'id');
    }
}
