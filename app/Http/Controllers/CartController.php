<?php

namespace App\Http\Controllers;

use App\Models\CartDetail;
use App\Models\CartHeader;
use App\Models\Menu;
use App\Models\OrderHeader;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cartHeader = CartHeader::where('user_id', '=', Auth::user()->id)->first();
        return view('cart', compact('cartHeader'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        // $user = auth()->user();

        $request->validate([
            'quantity' => 'required | min:1'
        ]);

        CartHeader::updateOrCreate([
            'user_id'   => Auth::user()->id,
        ],[
            'user_id'   => Auth::user()->id
        ]);

        $cartHeader = CartHeader::where('user_id', '=', Auth::user()->id)->first();
        // dd($cartHeader->id);
        CartDetail::updateOrCreate([
            'menu_id' => $id
        ],[
            'cart_id' => $cartHeader->id,
            'menu_id' => $id,
            'quantity' => $request->quantity
        ]);

        return redirect(route('dashboard'));
    }

    public function checkout()
    {
        // if($totalprice == 0){
        //     return redirect(route('home'));
        // }

        $orderHeader = OrderHeader::create([
            'user_id' => auth()->user()->id,
        ]);

        $cartHeader = CartHeader::where('user_id', '=', auth()->user()->id)->first();
        foreach ($cartHeader->cartDetails as $cartDetail) {
            // dd($cartDetail);
            // if($cartDetail->item != null) {
                OrderDetails::Create(
                    [
                        'order_id' => $orderHeader->id,
                        'menu_id' => $cartDetail->menu_id,
                        'quantity' => $cartDetail->quantity,
                        'status_id'=> '1'
                    ]
                );
            // }
        }

        CartHeader::destroy($cartHeader->id);
        CartHeader::create([
            'user_id' => auth()->user()->id
        ]);

        return redirect('/ordermenu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cartDetail = CartDetail::find($id);
        return view('editcart', compact('cartDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        CartDetail::where('id',$id)->delete();
        return redirect(route('cart'));
    }


}
