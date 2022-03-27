<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_details',
        'order_location',
        'order_mobile',
        'order_user_name',
        'order_date',
        'order_total',
        'order_status',
        'order_user_id',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

}
