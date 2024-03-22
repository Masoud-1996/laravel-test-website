<?php

namespace App\Models\Market;

use App\Models\User;
use App\Models\Market\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CartItem extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = ['user_id', 'number', 'product_id'];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    //product price

    public function cartItemProductPrice()
    {
        $productPrice = $this->product->price;
        return $productPrice;
    }



    // number * productPrice

    public function cartItemFinalPrice()
    {   

        $cartItemProductPrice = $this->cartItemProductPrice();

        return $this->number * $cartItemProductPrice;

    }


}
