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
        $data2=Post::orderBy('created_at', 'desc')->take(4)->get();
        return view('index',compact('data','data2'));
    // return Post::orderBy('created_at', 'desc')->first();
      //$data= Post::all();
     //  return view('index',compact('data','data2'));
     
    }
    
    public function about(){

    }
}
