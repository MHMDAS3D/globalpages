<?php

namespace App\Http\Controllers;

use App\NewsItem;
use Illuminate\Http\Request;
use App\NewsTicker;
use Session;
class NewsTickerController extends Controller
{
    function show()
    {
        $arr = array('', 'current', '', '', '', '', '', '', '','','');
        $tickers= NewsTicker::all();
        return view('admin.newsTicker',compact('arr','tickers'));
    }
    function addTicker()
    {
        $arr = array('', 'current', '', '', '', '', '', '', '','','');

        return view('admin.addTicker',compact('arr'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [


        ]);

        $ticker = new NewsTicker;
        $ticker->text_ar = request('title_ar');
        $ticker->text_en = request('title_en');
        $ticker->link = request('link');
        $ticker->save();
        Session::flash('success', 'تمت إضافة الشريط بنجاح ');

        return redirect('newsTicker');

    }
    public function delete(NewsTicker $id)
    {
        $id->delete();
        Session::flash('delete', 'تم حذف الشريط بنجاح');
        return redirect('newsTicker');

    }

    public function update(Request $request, $id)
    {
        $ticker=NewsTicker::find($id);
        //  $link=$slider->img_link;
        $this->validate($request, [

        ]);




        //$slider->img_link=$link;
        $ticker->text_ar = $request->desc;
        $ticker->text_en = $request->desc_en;
        $ticker->link = $request->link;


        $ticker->save();
        Session::flash('update', 'تم تعديل الشريط بنجاح');

        return redirect('newsTicker');



    }



}
