<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session ;
use App\NewsItem;



class NewsItemController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [

        ]);
        $link= time() . '.' . $request->image->getClientOriginalExtension();
        $NewsPapper = new NewsItem;
        $NewsPapper->title_ar = request('title_ar');
        $NewsPapper->title_en = request('title_en');
        $NewsPapper->desc_ar = request('desc_ar');
        $NewsPapper->desc_en = request('desc_en');
        $NewsPapper->news_papper_id=;
        $NewsPapper->item_type_id=1;
        $NewsPapper->img_link = $link;

        $NewsPapper->save();
        $request->image->move(public_path('upload'),$link);

        Session::flash('success', 'This item was successfully saved.');
        return back();

    }

}
