<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsPapper;
use App\NewsItem;
use App\ItemType;
use Session;

class NewsPapperController extends Controller
{
    function show()
    {
        $arr = array('', '', '', '', '', '', '', '', 'current','','');
        $newspapers= NewsPapper::all();
        $Types=ItemType::all();

        return view('admin.newspaper',compact('arr','newspapers','Types'));
    }

    public function addNewsPaper()
    {
        $arr = array('', '', '', '', '', '', '', '', 'current','','');
        return view('admin.addNewsPaper',compact('arr'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [

        ]);
        $link= time() . '.' . $request->image->getClientOriginalExtension();
        $NewsPapper = new NewsPapper;
        $NewsPapper->title_ar = request('title_ar');
        $NewsPapper->title_en = request('title_en');
        $NewsPapper->desc_ar = request('desc_ar');
        $NewsPapper->desc_en = request('desc_en');
        $NewsPapper->img_link = $link;

        $NewsPapper->save();
        $request->image->move(public_path('upload'),$link);

        Session::flash('success', 'This NewsPapper was successfully saved.');
        return back();

    }
    public function delete($id)
    {

        $NewsItem = NewsItem::where('item_type_id','=', $id);
        foreach ($NewsItem as $News)
        {
            $NewsItem->delete();
        }
        $type=NewsPapper::find($id);
        $type->delete();
        Session::flash('delete', 'This type was successfully deleted.');
        return redirect('newspaper');

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
        ]);

        $NewsPapper = NewsPapper::find($id);
        $NewsPapper->title_ar = request('title_ar');
        $NewsPapper->title_en = request('title_en');

        $NewsPapper->desc_en = request('desc_en');
        $NewsPapper->desc_ar = request('desc_ar');

        $NewsPapper->save();
        Session::flash('success', 'This NewsPapper was successfully saved.');

        return back();

    }

      function view($id)
      {
          $arr = array('', '', '', '', '', '', '', 'current', '','','');
          $items = NewsItem::where('news_papper_id','=',$id)->get();
          return view('admin.viewNewsPaper',compact('arr','items','id'));
      }

    public function addItem($id)
    {

        $arr = array('', '', '', '', '', '', '', '', 'current','','');
        return view('admin.addItem',compact('arr','id'));
    }
    public function storeitem(Request $request,$id)
    {
        $this->validate($request, [

        ]);
        $link= time() . '.' . $request->image->getClientOriginalExtension();
        $NewsPapper = new NewsItem;
        $NewsPapper->title_ar = request('title_ar');
        $NewsPapper->title_en = request('title_en');
        $NewsPapper->desc_ar = request('desc_ar');
        $NewsPapper->desc_en = request('desc_en');
        $NewsPapper->news_papper_id=$id;
        $NewsPapper->item_type_id=1;
        $NewsPapper->img_link = $link;

        $NewsPapper->save();
        $request->image->move(public_path('upload'),$link);

        Session::flash('success', 'This item was successfully saved.');
        return back();

    }

}
