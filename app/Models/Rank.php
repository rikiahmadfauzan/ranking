<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Rank extends Model
{
    use HasFactory;
    protected $guarded = [''];
    protected $Keytype = "string";
    // public function allData()
    // {
    //     return  DB::table('ranks')
    //             ->leftJoin('layouts', 'layouts.id', '=', 'ranks.id')
    //             ->leftJoin('layout2s', 'layout2s.id', '=', 'ranks.id')
    //             ->leftJoin('layout3s', 'layout3s.id', '=', 'ranks.id')
    //             ->get();
    // }
    
    
}
