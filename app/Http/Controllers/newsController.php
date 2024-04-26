<?php

namespace App\Http\Controllers;

use App\Models\Affichage;
use Illuminate\Http\Request;

class newsController extends Controller
{
    public function index(){
        $affichages = Affichage::orderBy('created_at','desc')->paginate(5);




        return view("feed",[
            'affichages'=>$affichages,
            



        ]);
    }
}