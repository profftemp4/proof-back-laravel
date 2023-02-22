<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $table     = 'Listing';
    protected $fillable = ['names', 'image_name', 'document', 'email', 'phone_number', 'Observations', 'state'];
}
