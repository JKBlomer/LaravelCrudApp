<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

   


    public function index(){
        // $title = "this is my little app";
        // return view("pages.index", compact("title"));
        // return view("pages.index")->with("title", $title);
        return view("pages.index");
        
    }


    public function about(){
       
        return view("pages.about");
        
    }

    public function services(){
        $data = array(
            "title"=>"Katelyn Blomer", 
            "services"=>["web dev", "programming","servers"]);
        return view("pages.services")->with($data);
    }
}


