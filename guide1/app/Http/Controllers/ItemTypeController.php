<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ItemType;
use App\NewsItem;
use Mockery\Matcher\Type;
use Session;
class ItemTypeController extends Controller
{
    public function show()
    {
        $arr = array('', '', '', '', '', '', '', '', 'current','','');
        return view('admin.addType',compact('arr'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
        ]);

        $ItemType = new ItemType;
        $link= time() . '.' . $request->img_link->getClientOriginalExtension();
        $ItemType->name_ar = request('name_ar');
        $ItemType->name_en = request('name_en');
        $ItemType->img_link=$link;
        $ItemType->save();
        $request->img_link->move(public_path('upload'),$link);
        Session::flash('success', 'This ticker was successfully saved.');

        return back();

    }
    public function delete($id)
    {

        $NewsItem = NewsItem::where('item_type_id','=', $id);
        foreach ($NewsItem as $News)
        {
            $NewsItem->delete();
        }
        $type=ItemType::find($id);
        $type->delete();
        Session::flash('delete', 'This type was successfully deleted.');
        return redirect('newspaper');

    }

    public function update(Request $request, $id)
    {
        $ItemType=ItemType::find($id);
        //  $link=$slider->img_link;
        $this->validate($request, [

        ]);




        //$slider->img_link=$link;
        $ItemType->name_ar = $request->name_ar;
        $ItemType->name_en = $request->name_en;


        $ItemType->save();
        Session::flash('update', 'This ItemType was successfully updated.');

        return back();



    }


}
