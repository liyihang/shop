<?php
namespace App\Http\Controllers;
use App\number;
use Illuminate\Http\Request;

class NumberController extends Controller{
    public function index()
    {
       return view('number.index');
    }
}