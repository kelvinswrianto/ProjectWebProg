<?php

namespace App\Http\Controllers;

use App\Cart;
use App\TransactionHeader;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\TransactionHistory;

class TransactionHistoryController extends Controller
{
    public function createHistoryHeader(string $courier){
        $header = new TransactionHeader();
        $header->total_price = Session::get('totalprice');
        $header->member_name = Session::get('username');
        $header->courier = $courier;
        $header->save();
        return $header->id;
    }

    public function checkout(Request $request)
    {
        //dd(substr($request->selectvalue, 0, strpos($request->selectvalue, ' ')));
        $carts = Cart::where('user_id', '=', Session::get('user_id'))->get();


        $header_id = Self::createHistoryHeader(substr($request->selectvalue, 0, strpos($request->selectvalue, ' ')));

        foreach ($carts as $history) {
            $datahistory = new TransactionHistory();
            $datahistory->id = $header_id;
            $datahistory->flower_name = $history->flower_name;
            $datahistory->flower_price = $history->price;
            $datahistory->flower_quantity = $history->quantity;
            $datahistory->flower_image = $history->flower_image;
            $datahistory->save();
        }

        $carts = Cart::where('user_id', '=', Session::get('user_id'))->delete();
        return redirect('homepage')->with('alert-success','Thank you for purchasing !');
    }

    public function viewHistory(){
        $transaction_header = TransactionHeader::all();
        $transaction_items = TransactionHistory::all();
        return view('admin.transaction_histories', compact('transaction_header', 'transaction_items'));
    }
}
