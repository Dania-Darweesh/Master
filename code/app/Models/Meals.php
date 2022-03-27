<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'sale_price',
        'image',
        'in_stock',
        'fats',
        'proteins',
        'status',
        'carbohydrates',
        'category_id',
    ];

    public function categories(){
        return $this->belongsTo(Categories::class);
    }
}
