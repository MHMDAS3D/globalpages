<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area ;
use App\Country ;

use Session ;


class AreaController extends Controller
{
    function show()
    {
        $arr = array('', '', '', '', 'current', '', '', '', '','','');
        $areas= Area::all();
        $Governonates=Country::all();
        return view('admin.area',compact('arr','areas','Governonates'));
    }
    function addArea()
    {
        $Governonates=Country::all();
        $arr = array('', '', '', '', '', 'current', '', '', '','','');

        return view('admin.addArea',compact('arr','Governonates'));
    }
    function addGovernonate()
    {
        $arr = array('', '', '', '', '', 'current', '', '', '','','');

        return view('admin.Governonate',compact('arr'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [

        ]);

        $area = new Area();
        $area->name_ar = request('name_ar');
        $area->name_en = request('name_en');
        $area->country_id=	request('country_id');

        $area->save();
        Session::flash('success', 'This area was successfully saved.');

        return back();

    }
    public function delete(Area $id)
    {
        $id->delete();
        Session::flash('delete', 'This Area was successfully deleted.');
        return redirect('area');

    }

    public function update(Request $request, $id)
    {
        $area=Area::find($id);
        //  $link=$slider->img_link;
        $this->validate($request, [

        ]);




        //$slider->img_link=$link;
        $area->name_ar = request('name_ar');
        $area->name_en = request('name_en');
        $area->country_id=	request('country_id');
        $area->save();
        Session::flash('update', 'This area was successfully updated.');
        return back();

    }
}
