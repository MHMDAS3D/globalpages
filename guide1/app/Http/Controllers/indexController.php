<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Area;
use App\Category;
use App\Country;
use App\Governonate;
use App\ItemType;
use App\Job;
use App\Market;
use App\MarketCategory;
use App\NewsItem;
use App\NewsPapper;
use App\NewsTicker;
use App\Pharmacy;
use App\User;

class indexController extends Controller
{
   public function  showIndex(){
        $dd = NewsTicker::all();
       $sliders=Slider::all();
       $newsTikers=NewsTicker::all();
       $cats=Category::all();
       $jobs=Job::all();
       $areas=Area::all();
       $Governonates=Governonate::all();
       $Jobs= Job::with('jobtype')->take(10)->get();
       return view('index',compact('sliders','newsTikers','cats','jobs','Governonates','areas','Jobs'));
}
public function showblog(){

    $newspapers=NewsPapper::where('MONTH(time)', '=',MONTH() );
    $newsTikers=NewsTicker::all();
    $cats=Category::all();
    $jobs=Job::all();
    $areas=Area::all();
    $Governonates=Governonate::all();
    $Jobs= Job::with('jobtype')->take(10)->get();
    return view('page-blog',compact('newspapers','newsTikers','cats','jobs','Governonates','areas','Jobs'));

}
}
