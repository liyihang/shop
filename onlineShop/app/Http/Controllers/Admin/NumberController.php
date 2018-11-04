<?php
namespace App\Http\Controllers\Admin;
use App\Admin\number;
use Illuminate\Http\Request;

class NumberController extends Controller{
    public function index()
    {
       return view('admin.number.index');
    }
    public function add()
    {
        # code...
        return view('admin.number.add');
    }
     
    public function doadd(Request $req)
    {
        dd($req->all());

    }
}