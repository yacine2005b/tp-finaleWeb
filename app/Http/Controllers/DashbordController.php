<?php

namespace App\Http\Controllers;

use App\Models\Affichage;
use Illuminate\Http\Request;

class DashbordController extends Controller
{

    public function index(){



return view('welcome');
    }
}
