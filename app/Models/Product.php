<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = "products";
    // return $this
    // protected $fillable = [
    //     'ProdName',
    //     'ProdPrice',
    //     'ProdDesk',
    //     'ProdImage'
    // ];
}
