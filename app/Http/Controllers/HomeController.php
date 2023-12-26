<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\MouModel;
use App\Models\CategoryModel;




class HomeController extends Controller
{
    protected $table ='mou';

    public function home()
    {
        return view('home');
    }

    public function show()
    {
        $data= MouModel::all();
        $datac= CategoryModel::all();
        
        return view('home',compact('data','datac'));
    }
   
}
