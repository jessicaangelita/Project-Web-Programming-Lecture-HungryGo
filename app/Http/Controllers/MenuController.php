<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menus = Menu::all();

        return view('dashboard', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createmenu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $extension = $request->file('ImageMenu')->getClientOriginalExtension();
        $fileName = $request->NameMenu.'.'.$extension;
        $request->file('ImageMenu')->storeAs('public/menus/', $fileName);

        Menu::create([
            'name' => $request->NameMenu,
            'description' => $request->DescriptionMenu,
            'price' => $request->PriceMenu,
            'image' => $fileName
        ]);

        return redirect(route('dashboard'));
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
        $menu = Menu::findOrFail($id);

        return view('menudetail', compact('menu'));
    }

    public function ordermenu(){

        return view ('order');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('editmenu', compact('menu'));
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

        $request->validate([
            'NameMenu'=>'required|min:5',
            'DescriptionMenu'=>'required',
            'PriceMenu'=>'required',
            'ImageMenu'=>'required',
            ]);

        $extension = $request->file('ImageMenu')->getClientOriginalExtension();
        $fileName = $request->NameMenu.'.'.$extension;
        $request->file('ImageMenu')->storeAs('public/menus/', $fileName);

        $nama = $request->input('NameMenu');
        $description=$request->input('DescriptionMenu');
        $price = $request->input('PriceMenu');
        $image=$fileName;


        DB::update('update `menus` set `name` = ?, `description`= ?,`price`=?,`image`=?
        where id = ?',[$nama,$description,$price,$image,$id]);
        return redirect(route('dashboard'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::where('id',$id)->delete();
        return redirect(route('dashboard'));
    }

}
