<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\model\Admin;
use Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
      
        return view('dashboard');
      
    }
}
