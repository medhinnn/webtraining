<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static function sumPriceByQuantities($products, $productInSession)
    {
        $total = 0;
        foreach ($products as $product) {
            $total = $total + ($product->getPrice() * $productInSession[$product->getId()]);
        }
        return $total;

    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getQuantity(){
        return $this->quantity;
    }
    public function item()
    {
        return $this->hasMany(Item::class);
    }
}