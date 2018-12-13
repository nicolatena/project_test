<?php


namespace App\Http\Controllers;
 
use Illuminate\Http\Request;



class BelajarController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function getPage()
    {
    	$title = 'Ini halaman HTML';
    	$content = 'Saat ini kita berada di halaman HTML onphpid.com';

    	return view('index2', compact('title', 'content'));
    }

    public function getOne()
    {
        $title = 'HALLO HABIS BELAJAR GITHUB NIH KITA';
        $content = 'Saat ini kita belajar push dan pull!!! bray!!!';
        $users = \App\User::get();
            
        return view('index', compact('title', 'content', 'users'));
    }

}