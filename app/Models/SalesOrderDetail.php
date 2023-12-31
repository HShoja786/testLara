<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrderDetail extends Model
{
    use HasFactory;


    protected $fillable = [
        'sales_id',
        'item',
        'quantity',
        'cost',
    ];

}
