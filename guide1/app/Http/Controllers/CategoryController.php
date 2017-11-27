<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MarketCategory;
use Response;
use App\Category;
class CategoryController extends Controller
{
    public function show(){
        $cat = Category::all();
        return Response::json(array('category' =>$cat
        , 'state' => 'true'));
    }
}
