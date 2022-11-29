<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class review extends Model
{
    use HasFactory;
    protected $fillable=['user_id','product_id','review','stars'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(product::class);
    }
    
    public function humanformatedDate(){
        $date= Carbon::createFromTimestamp(strtotime($this->created_at))->diffForHumans();
        return $date;
    }
}
