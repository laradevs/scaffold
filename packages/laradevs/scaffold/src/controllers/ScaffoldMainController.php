<?php

namespace Laradevs\Scaffold\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScaffoldMainController extends Controller
{
    public function index(Request $request){
        return view('scaffold::main');
    }
}
