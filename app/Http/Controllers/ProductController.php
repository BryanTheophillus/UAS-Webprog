<?php

namespace App\Http\Controllers;
// {{-- Bryan Theophillus - 2401953966 --}}
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    public function Home(){
        $items = Item::paginate(10);
        return view('home', compact('items'));
    }

    public function Detail($id){
        $detail = Item::find($id);
        $order = Order::where('account_id', Auth::user()->id)->where('item_id', $detail->id)->exists();

        return view('detail', compact('detail','order'));
    }
}
