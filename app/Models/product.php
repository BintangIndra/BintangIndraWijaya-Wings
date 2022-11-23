<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public $primaryKey = 'Product_code';
    public $incrementing = false;

    protected $fillable = [
        'Product_code',
        'Product_Name',// '000100110122014'
        'Price',
        'Currency',
        'Discount',
        'Dimension',
        'Unit'
    ];
}
