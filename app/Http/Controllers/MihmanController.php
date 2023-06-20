<?php

namespace App\Http\Controllers;

use App\Mihman;
use App\User;
use Illuminate\Http\Request;

class MihmanController extends Controller
{

    function index(){




        return view('admin.newmihman');

    }

    public function new()
    {

        Mihman::create([

            'name' => request('name'),
            'phone' => request('phone'),
            'mizban' => request('mizban'),
            'tarikh1' => request('tarikh1'),
            'tarikh2' => request('tarikh2'),
            'tarikh3' => request('tarikh3'),
            'parking' => request('parking'),
            'nahar' => request('nahar'),
            'wifi' => request('wifi'),
            'vaz' => request('vaz'),
            'vaz2' => request('vaz2'),
            'user_id' => request('user_id')


        ]);
        return redirect()->action('MihmanController@index')->with('success','میهمان شما با موفقیت ثبت گردید');

    }
    public function list()
    {

        $item=Auth()->user()->Mihman;
        $items=$item->where('vaz2','LIKE',"0")->sortByDesc('id');




        return view('admin.mihmanlist',['items'=>$items]);

    }
    public function read($id)
    {

        $items=Mihman::all()->where('id','=',$id);
        return view('admin.mihmaned',['items'=>$items]);

    }
    public function up(Request $request)
    {

        $items=Mihman::find(request('idh'));
        $items->update([
            'name' => request('name'),
            'phone' => request('phone'),
            'mizban' => request('mizban'),
            'tarikh1' => request('tarikh1'),
            'tarikh2' => request('tarikh2'),
            'tarikh3' => request('tarikh3'),
            'parking' => request('parking'),
            'nahar' => request('nahar'),
            'wifi' => request('wifi'),
            'vaz' => request('vaz'),
            'vaz2' => request('vaz2'),
            'user_id' => request('user_id')

        ]);
        return back()->with('success','ویرایش با موفقیت انجام شد');
    }
    public function list2()
    {

        $item=Auth()->user()->Mihman;
        $items=$item->sortByDesc('id');




        return view('admin.mihmanlist2',['items'=>$items]);

    }
    public function list3()
    {

        $items= Mihman::all()->where('vaz2','=',0);




        return view('admin.mihmanlistnegahbani',['items'=>$items]);

    }
    public function up1(Request $request)
    {

        $items=Mihman::find(request('idh'));
        $items->update([

            'tarikh2' => request('tarikh2'),


            'vaz' => request('vaz')



        ]);
        return back()->with('success','میهمان وارد مجموعه شد');
    }
    public function up2(Request $request)
    {

        $items=Mihman::find(request('idh'));
        $items->update([

            'tarikh3' => request('tarikh3'),
            'vaz' => request('vaz'),
            'vaz2' => request('vaz2')


        ]);
        return back()->with('success','میهمان از مجموعه خارج شد');
    }
    public function list4()
    {

        $items= Mihman::all()->where('vaz2','=',0);




        return view('admin.mihmanlistajax',['items'=>$items]);

    }

}
