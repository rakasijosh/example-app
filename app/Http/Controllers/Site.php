<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site extends Controller
{
  public function first(Request $req){
    return $req->input();
  }
}
