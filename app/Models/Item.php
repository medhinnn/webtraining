<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public static function validate($request)
    {
       $request->validate([
        " price" => "required|numeric|gt:0",
        "quantity" => "required|numeric|gt:0",
        "product_id" => "required|exists:product_id",
        "order_id" => "required|exists:order_id"
    ]);
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
