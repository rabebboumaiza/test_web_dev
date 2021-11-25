<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\ Support\ Facades\ Log;
use Illuminate\Support\Facades\Redirect ;
use Illuminate\Support\Facades\URL ;

class QrCodeGeneratorController extends Controller
{

   
    
    public $tabs=[], $tabs2=[];
    public function store(){
        request()->validate([
            'content'=>['required'],
        ]);
        $tabsWithVirgules=request('content');
        $tabs = explode(",", $tabsWithVirgules);
       return view('/qr-code')->with('tabs',$tabs);
    }
    
    public function index(){
        /*if(empty($tabs2)){*/
        // if we don't have data from vue js
         $tabs2=['val 1','val 2','val 3','val 4','val 5','val 6'];
       /* }*/
        return view('qr-code')->with('tabs',$tabs2);
     
    }
}
