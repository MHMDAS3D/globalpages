<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MarketCategory;
use Response;
class CategoryController extends Controller
{
    public function show(){
        $cat = MarketCategory::all();
        return Response::json(array('category' =>$cat
        , 'state' => 'true'));
    }
}
