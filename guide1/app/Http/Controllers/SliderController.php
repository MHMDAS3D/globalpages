<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Illuminate\Support\Facades\Session;
use Response ;
class SliderController extends Controller
{
    function show()
    {
        $arr = array('current', '', '', '', '', '', '', '', '','','');
        $sliders= Slider::all();
        return view('admin.slider',compact('arr','sliders'));
    }
    public function store_ar(Request $request)
    {
        $this->validate($request, [

            'img_link' => 'required|image|mimes:jpg,jpeg,png'
        ]);
        $link= time() . '.' . $request->img_link->getClientOriginalExtension();
        $slider = new Slider;
        $slider->title_ar = request('desc');
        $slider->title_en = request('desc_en');


        $slider->img_link = $link;

        $slider->save();
        Session::flash('success', 'تم إضافة السلايدر بنجاح ');
        $request->img_link->move(public_path('upload'),$link);
        return redirect();

    }
    public function addSlider()
    {
        $arr = array('current', '', '', '', '', '', '', '', '','','');
        return view('admin.add',compact('arr'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show()
//    {
//        $sliders =  slider::all() ;
//        return view ('admin.slider', compact('sliders'));
//
//
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function update(Request $request, $id)
    {
        $slider=Slider::find($id);
        //  $link=$slider->img_link;
        $this->validate($request, [

        ]);
        dd($request);
        if (! empty($request->img_link)) {

            $link= time() . '.' . request('img_link')->getClientOriginalExtension();
            // $slide->update(array('title' =>request('title'),
            //                       'desc' =>request('desc') ,
            //                       'img_link' => $link ));
            $request->img_link->move(public_path('upload'),$link);
            $slider->img_link = $link ;

        }



        //$slider->img_link=$link;
        $slider->title_ar = $request->desc;
        $slider->title_en = $request->desc_en;
        $slider->save();
        Session::flash('update', 'تمت عملية التعديل بنجاح .');

        return back();



    }


    public function delete(Slider $id)
    {
        $id->delete();
        Session::flash('delete', 'تم حذف السلايدر بنجاح .');

        return redirect('slider');

    }
    public function showAPI()
    {
        $sliders= Slider::all();
        return Response::json(array('Sliders' =>$sliders
        , 'state' => 'true'));

    }
}
