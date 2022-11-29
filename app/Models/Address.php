<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable=[
    'street_name',	'street_num'	,'city',	'country'	,'postcode',	'state',
    ];
    public function User(){
        return $this->belongsTo(User::class); 
    }
}
