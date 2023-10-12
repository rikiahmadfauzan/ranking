<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rank;
use App\Models\Layout;
use App\Models\Layout2;
use App\Models\Layout3;
use Illuminate\Support\Facades\DB;


class RankController extends Controller
{
    
    function show(){
        $data['layout1'] = Layout::all();
        $data['layout2'] = Layout2::all();
        $data ['layout3'] = Layout3::all();
        return view('ranking', $data);
    }
}
