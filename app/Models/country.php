<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;

    protected $table='countries';
    protected $primarykey='id';

// no timestamps columns
    public $timestamps = false;

// not using autoincrementing primary key?
    public $incrementing = false;

    public function cities()
    {
        return $this->hasMany(city::class, 'country_id', 'id');
    }
    public function states()
    {
        return $this->hasMany(states::class, 'country_id', 'id');
    }
}
