<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class Controller01 extends Controller
{
    public function index()
    {
        $title = 'Controller01'; // data yang akan kita kirim ke views
        
        return view('belajar1', compact('title'));
    }
}