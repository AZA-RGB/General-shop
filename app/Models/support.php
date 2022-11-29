<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class support extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'message',
        'user_id',
        'order_id',
        'support_type_id'
    ];

    public function supportType()
    {
        return $this->hasOne(support_type::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function order()
    {
        return $this->belongsTo(order::class);
    }
}
