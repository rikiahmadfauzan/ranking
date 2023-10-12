<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SheetDB\SheetDB;

class DashboardController extends Controller
{
    //
    function show(){
        return view('dashboard');
    }
    public function index(){
        // $sheetdb = new SheetDB('k7aiaatxy6k5i');
        // dd($sheetdb->get());
        $options = array(
            'http' => array(
                'method' => 'GET'
            )
        );

        $result = json_decode(
            file_get_contents('https://sheetdb.io/api/v1/k7aiaatxy6k5i', false, 
            stream_context_create($options))
        );

        return view('dashboard', compact('result'));
    }
}
