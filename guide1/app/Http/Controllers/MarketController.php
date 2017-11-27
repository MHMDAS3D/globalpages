<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Market;
use App\MarketCategory;
use Session;
use Response;
use DB;
class MarketController extends Controller
{
    function show()
    {
        $arr = array('', '', '', '', 'current', '', '', '', '','','');
        $markets= Market::all();
        $cats = Category::all();
        return view('admin.market',compact('arr','markets','cats'));
    }
    function addMarket()
{
    $arr = array('', '', '', '', 'current', '', '', '', '','','');
    return view('admin.addMarket',compact('arr'));
}
    public function store(Request $request)
    {
        $this->validate($request, [
        ]);
        $link= time() . '.' . $request->image->getClientOriginalExtension();
        $link1= time().'cover' . '.' . $request->cover->getClientOriginalExtension();

        $markets = new Market();
        $markets->name = request('name_en');
        $markets->name_ar = request('name_ar');
        $markets->desc = request('desc_en');
        $markets->desc_ar = request('desc_ar');
        $markets->address = request('address_en');
        $markets->address_ar = request('address_ar');
        $markets->phone = request('num_1');
        $markets->phone2 = request('num_2');
        $markets->phone3 = request('num_3');
        $markets->website = request('website');
        $markets->FB = request('fb');
        $markets->email = request('email');

        $markets->twitter = request('twitter');
        $markets->youtube = request('youtube');
        $markets->skype = request('	skype');
        $markets->instagram = request('	instagram');
        $markets->lat = request('lat');
        $markets->lang = request('long');
        $markets->category_id=1;
        $markets->img_link = $link;
        $markets->cover_img = $link1;
        $markets->isApprove = 1;





        $markets->save();
        Session::flash('success', 'This /market was successfully saved.');
        $request->image->move(public_path('upload'),$link);
        $request->cover->move(public_path('upload'),$link1);

        return redirect('markets');

    }
public function ismain($id){
    $market=Category::find($id);

    $market->isMain = 1;
    $market->save();
    return back();
}
    public function isnotmain($id){
        $market=Category::find($id);

        $market->isMain = 0;
        $market->save();
        return back();
    }
    public function approve(Request $request, $id)
    {
        $market=Market::find($id);
        $this->validate($request, [

        ]);
        $market->isApprove = 1;
        $market->save();
        Session::flash('update', 'This area was successfully updated.');
        return back();

    }
    public function delete(Market $id)
    {
        $id->delete();
        Session::flash('delete', 'This Market was successfully deleted.');
        return redirect('markets');

    }
    public function deletecat(Category $id)
    {
        $id->delete();
        Session::flash('delete', 'This Market was successfully deleted.');
        return redirect('markets');

    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
        ]);

        $markets = Market::find($id);
        if (! empty($request->image)) {

            $link= time().image . '.' . request('image')->getClientOriginalExtension();
            // $slide->update(array('title' =>request('title'),
            //                       'desc' =>request('desc') ,
            //                       'img_link' => $link ));
            $request->image->move(public_path('upload'),$link);
            $markets->img_link = $link ;

        }
        if (! empty($request->cover)) {

            $link= time() . '.' . request('cover')->getClientOriginalExtension();
            // $slide->update(array('title' =>request('title'),
            //                       'desc' =>request('desc') ,
            //                       'img_link' => $link ));
            $request->cover->move(public_path('upload'),$link);
            $markets->cover_img = $link ;


        }
        $markets->name = request('name_en');
        $markets->name_ar = request('name_ar');

        $markets->desc = request('desc_en');
        $markets->desc_ar = request('desc_ar');
        $markets->address = request('address_en');
        $markets->address_ar = request('address_ar');
        $markets->phone = request('num_1');
        $markets->phone2 = request('num_2');
        $markets->phone3 = request('num_3');
        $markets->website = request('website');
        $markets->FB = request('fb');
        $markets->twitter = request('twitter');
        $markets->youtube = request('youtube');
        $markets->skype = request('	skype');
        $markets->instagram = request('	instagram');
        $markets->lat = request('lat');
        $markets->lang = request('long');
        $markets->category_id=1;

        $markets->isApprove = 1;





        $markets->save();
        Session::flash('success', 'This slider was successfully saved.');

        return back();

    }
    public function addMarketCat()
    {
        $arr = array('', '', '', '', 'current', '', '', '', '','','');
        return view('admin.addcat',compact('arr'));
    }
    public function storeCategory(Request $request)
    {
        $link= time() . '.' . $request->img_link->getClientOriginalExtension();
        $category = new Category();

        $category->name_ar = $request->name_ar;
        $category->name_en = $request->name_en;
        $category->img_link = $link;

        $request->img_link->move(public_path('upload'),$link);
        $category->save();
        return back();

    }
    //services
    function showService()
    {
        $market=Market::with('MarketCategory')->get();
        return Response::json(array('Market' =>$market
        , 'state' => 'true'));
    }
    function test()
    {
        $market=Market::with('MarketCategory')->get();
        return Response::json(array('Market' =>$market
        , 'state' => 'true'));
    }

    function getMarketById($id)
    {
        $market=Market::with('MarketCategory')->find($id);
        return Response::json(array('Market' =>$market
        , 'state' => 'true'));
    }


    public function distance($lat , $long, $catid)
    {

                $market = Market::with('MarketCategory')

                ->select(DB::raw("*,
                     (3959 * ACOS(COS(RADIANS($lat))
                           * COS(RADIANS(lat))
                           * COS(RADIANS($long) - RADIANS(lang))
                           + SIN(RADIANS($lat))
                           * SIN(RADIANS(lat)))) AS distance")

                )->where('isApprove','=','1')
                ->where('category_id','=',$catid)
                ->orderBy('distance', 'asc')
                ->get();
                if (empty($market)){

                    return Response::json(array(
                        'state' => 'false'));
                }
                else{
                    return Response::json(array('Market' =>$market
                    , 'state' => 'true'));
                }
        }
        public function getSubByCat($id)
        {
            $category = MarketCategory::where('catigory_id','=',$id)->get();
            return Response::json(array('category' =>$category
            , 'state' => 'true'));
        }

}
