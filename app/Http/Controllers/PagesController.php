<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{

    //this is the homepage
    public function index(){
     

        $data=Post::orderBy('created_at', 'desc')->first();
        return view('index',['latestPost'=>$data]);
    // return Post::orderBy('created_at', 'desc')->first();
      //$data= Post::all();
     // 
    }
    
    public function about(){

    }
}
