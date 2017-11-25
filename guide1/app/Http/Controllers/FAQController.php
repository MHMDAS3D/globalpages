<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FAQ ;
use Session ;
class FAQController extends Controller
{
    function show()
    {
        $arr = array('', '', 'current', '', '', '', '', '', '','','');
        $FAQs= FAQ::all();
        return view('admin.FAQ',compact('arr','FAQs'));
    }
    public function addFAQ()
    {
        $arr = array('', '', 'current', '', '', '', '', '', '','','');
        return view('admin.addFAQ',compact('arr'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [

        ]);
        $faq = new FAQ;
        $faq->quation_ar = request('quation_ar');
        $faq->quation_en = request('quation_en');
        $faq->answer_ar = request('answer_ar');
        $faq->answer_en = request('answer_en');
        $faq->save();
        Session::flash('success', 'تمت إضافة السؤال بنجاح ');
        return redirect('faq');

    }
    public function update(Request $request, $id)
    {
        $faq=FAQ::find($id);
        $faq->quation_ar = request('quation_ar');
        $faq->quation_en = request('quation_en');
        $faq->answer_ar = request('answer_ar');
        $faq->answer_en = request('answer_en');
        $faq->save();

        Session::flash('update', 'تم تعديل السؤال بنجاح .');

        return redirect('faq');



    }
    public function delete(FAQ $id)
    {
        $id->delete();
        Session::flash('delete', 'تم حذف السؤال بنجاح .');

        return redirect('faq');

    }
}
