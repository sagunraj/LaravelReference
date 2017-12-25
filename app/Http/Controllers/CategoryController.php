<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    function Start(){
//        $data = DB::table('category')->get(); //find($id), first() will give the first row data, select() will select a column
//
//        $data = DB::table('category')
//        ->where([['title', '=', 'Nathen Rodriguez'], ['id','>', '2']])
//        ->get();
//
//      $data = DB::table('category')
//          ->where('title', 'Elmo Spencer')
//          ->orWhere('id','>', 3)
//          ->get();

      $data = DB::table('category')
          ->whereIn('id', [1,2,4,6,9])
          ->orderBy("title", "asc")
          ->get();

        return response()->json($data, 200);
    }
}