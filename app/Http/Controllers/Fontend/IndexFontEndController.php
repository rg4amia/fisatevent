<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexFontEndController extends Controller
{
    public function index(){
        return view('font-end.accueil');
    }
}
