<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderHeader;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderDetails;

class OrderController extends Controller
{
    public function Show()
    {
        if (auth()->user()->isAdmin)
        {
            $orders = OrderHeader::where('id', '!=', '1')->get();
        }

        else{
            OrderHeader::updateOrCreate([
                'user_id'   => Auth::user()->id,
            ],[
                'user_id'   => Auth::user()->id
            ]);

            $orders=OrderHeader::where("user_id", auth()->user()->id)->get();
        }

        return view("order", compact("orders"));

    }

    public function ChangeStatus($id)
    {
        $status = OrderDetails::find($id);


        $status->status_id = $status->status_id + 1;
        OrderDetails::find($id)->update([
            "status_id" => $status->status_id
        ]);

    
        return back();
    }

}
