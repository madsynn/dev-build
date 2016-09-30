<?php namespace App\Ecommerce;

use App\Models\Section;
use App\Models\Cart;
use Auth;
use Session;
use \Illuminate\Database\Eloquent\Collection;

class helperFunctions
{
	public static function getPageInfo(&$sections,&$cart,&$total)
    {
        $sections = Section::all();
        if (Sentinel::check()) {
            $cart = Auth::user()->cart;
        } else {
            $cart = new Collection;
            if (Session::has('cart')) {
                foreach (Session::get('cart') as $item) {
                    $elem = new Cart;
                    $elem->product_id = $item['product_id'];
                    $elem->amount = $item['qty'];
                    if (isset($item['options'])) {
                        $elem->options = $item['options'];
                    }
                    $cart->add($elem);
                }
            }
        }
        $total = 0;
        foreach ($cart as $item) {
            $total += $item->product->price*$item->amount;
        }
    }
}