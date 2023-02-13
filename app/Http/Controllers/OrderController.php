<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
// {{-- Bryan Theophillus - 2401953966 --}}
class OrderController extends Controller
{
    public function Cart() {
        $orders = Order::where('account_id', Auth::user()->id)->get();
        return view('cart', compact('orders'));
    }

    public function Add($id) {

        $items = Item::find($id);
        $prices = $items->price;
        $order = new Order();
        $order->account_id = Auth::user()->id;
        $order->item_id = $id;
        $order->price = $prices;
        $order->save();

        return redirect('/Cart');
    }

    public function Delete($id) {
        $order = Order::find($id);
        if(isset($order)){
            $order->delete();
        }


        return redirect('/Cart');
    }

    public function DeleteCart() {
        $orders = Order::where('account_id', Auth::user()->id)->get();
        if(isset($orders)){
            foreach($orders as $order) {
                $order->delete();
            }
        }
        return redirect('/CheckoutSucces');
    }

    public function Success() {
        return view('CheckoutSuccses');
    }

}
