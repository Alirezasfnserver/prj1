<?php

namespace App\Http\Controllers;

use App\Tablo;
use Illuminate\Http\Request;

class TabloController extends Controller
{
    public function new()
    {

        Tablo::create([

            'name' => request('name'),
            'text' => request('text'),
            'tarikh' => request('tarikh')

        ]);
        return redirect()->action('TabloController@list')->with('success','اطلاعیه با موفقیت ثبت گردید');

    }
    public function list()
    {

        $items= Tablo::all()->where('vaz','=',0);




        return view('admin.tablolist',['items'=>$items]);

    }
    function index(){




        return view('admin.tablo');

    }
    public function up1(Request $request)
    {

        $items=Tablo::find(request('idh'));
        $items->update([


            'vaz' => request('vaz')



        ]);
        return back()->with('success','اعلان از دسترس خارج شد');
    }
    public function up2(Request $request)
    {

        $items=Tablo::find(request('idh'));
        $items->update([

            'name' => request('name'),
            'text' => request('text')



        ]);
        return redirect()->action('TabloController@list')->with('success','اطلاعیه با موفقیت ویرایش گردید');
    }
    public function ed($id)
    {

        $items=Tablo::all()->where('id','=',$id);
        return view('admin.tabloedit',['items'=>$items]);

    }
}
