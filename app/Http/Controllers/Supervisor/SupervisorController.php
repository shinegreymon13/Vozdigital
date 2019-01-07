<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
    $this->middleware('supervisor');
  }

  public function index(){
    return view('supervisor.index');
  }
}
