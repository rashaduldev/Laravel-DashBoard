<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        return view('admin.dashboard.home');
    }

    public function add(){
       
    }
    public function view(){
       
    }
    public function all(){
       
    }
    public function edit(){
       
    }
    public function update(){
       
    }
    public function softdelete(){
       
    }
    public function restore(){
       
    }
    public function insert(){
       
    }
}
