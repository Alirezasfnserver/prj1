<?php

namespace App\Http\Controllers;

use App\Kala;
use Illuminate\Http\Request;

class KalaController extends Controller
{
    function index(){




        return view('admin.newkala');

    }

    public function new()
    {

        Kala::create([

            'name' => request('name'),
            'vahed' => request('vahed'),
            'kala' => request('kala'),
            'tedad' => request('tedad'),
            'tarikh1' => request('tarikh1'),
            'vaz1' => request('vaz1'),
            'vaz2' => request('vaz2'),
            'dec' => request('dec'),
            'user_id' => request('user_id')


        ]);
        return back()->with('success','درخواست شما با موفقیت ثبت گردید');

    }
    public function list1()
    {

        $item=Auth()->user()->Kala;
        $items=$item->sortByDesc('id');




        return view('admin.mykala',['items'=>$items]);

    }
    public function list2()
    {

        $items= Kala::all()->where('vaz2','=',0);




        return view('admin.kalaman',['items'=>$items]);

    }
    public function ed($id)
    {

        $items=Kala::all()->where('id','=',$id);
        return view('admin.kalaed',['items'=>$items]);

    }
    public function up(Request $request)
    {

        $items=Kala::find(request('idh'));
        $items->update([
            'mas' => request('mas'),
            'tah' => request('tah'),
            'price' => request('price'),
            't2' => request('t2'),
            'vaz1' => request('vaz1')


        ]);
        return back()->with('success','ویرایش با موفقیت انجام شد');
    }
    public function up2(Request $request)
    {

        $items=Kala::find(request('idh'));
        $items->update([

            'vaz1' => request('vaz1'),
            'tarikh2' => request('tarikh2')


        ]);
        return back()->with('success','تحویل کالا با موفقیت انجام شد');
    }
}
