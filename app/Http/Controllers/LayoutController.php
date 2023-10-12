<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layout;
use App\Models\Layout2;
use App\Models\Layout3;
use Illuminate\Support\Facades\DB;

class LayoutController extends Controller
{
    //
    function show1(){
        // $data ['layout1'] = Layout::all();
        $data['layout1'] = Layout::orderBy('closing','desc')->get();
        
        return view('layout1', $data);
    }
    function add1(){
        $data=[
            'action'=>url('layout1/create1'),
            'tombol'=>'Simpan',
            'tambah'=>(object)[
                'kd_teknisi' =>'',
                'nama' =>'',
                'closing' =>'',
            ],
        ];
        return view('layout1',$data);
    }
    function create1(Request $req){
        Layout::create([
            'kd_teknisi' => $req->kd_teknisi,
            'nama' => $req->nama,
            'closing' => $req->closing,
        ]);

        return redirect('layout1');
    }
    function edit1($id){
        $data['layout1'] = Layout::find($id);
        $data['action']= url('layout1/update1').'/'.$data['layout1']->id;
        $data['tombol'] = 'Update';
        return view('layout1',$data);
    }
    function update1(Request $req){
        Layout::where('id',$req->id)->update([
            'closing' => $req->closing,
        ]);
        return redirect('layout1');
    }

    // LAYOUT 2

    function show2(){
        // $data ['layout2'] = Layout2::all();
       
        $data['layout2'] = Layout2::orderBy('closing','desc')->get();
        return view('layout2',$data);
    }
    function add2(){
        $data=[
            'action'=>url('layout2/create1'),
            'tombol'=>'Simpan',
            'tambah'=>(object)[
                'kd_teknisi' =>'',
                'nama' =>'',
                'closing' =>'',
            ],
        ];
        return view('layout2',$data);
    }
    function create2(Request $req){
        Layout2::create([
            'kd_teknisi' => $req->kd_teknisi,
            'nama' => $req->nama,
            'closing' => $req->closing,
        ]);

        return redirect('layout2');
    }
    function edit2($id){
        $data['layout2'] = Layout2::find($id);
        $data['action']= url('layout2/update2').'/'.$data['layout2']->id;
        $data['tombol'] = 'Update';
        return view('layout2',$data);
    }
    function update2(Request $req){
        Layout2::where('id',$req->id)->update([
            'closing' => $req->closing,
        ]);
        return redirect('layout2');
    }

    // LAYOUT 3

    function show3(){
        // $data ['layout3'] = Layout3::all();
        $data['layout3'] = Layout3::orderBy('closing','desc')->get();
        return view('layout3',$data);
    }
    function add3(){
        $data=[
            'action'=>url('layout3/create3'),
            'tombol'=>'Simpan',
            'tambah'=>(object)[
                'nama' =>'',
                'kd_teknisi' =>'',
                'closing' =>'',
            ],
        ];
        return view('layout3',$data);
    }
    function create3(Request $req){
        Layout3::create([
            'nama' => $req->nama,
            'closing' => $req->closing,
            'kd_teknisi' => $req->kd_teknisi,
        ]);

        return redirect('layout3');
    }
    function edit3($id){
        $data['layout3'] = Layout3::find($id);
        $data['action']= url('layout3/update3').'/'.$data['layout3']->id;
        $data['tombol'] = 'Update';
        return view('layout3',$data);
    }
    function update3(Request $req){
        Layout3::where('id',$req->id)->update([
            'closing' => $req->closing,
        ]);
        return redirect('layout3');
    }
}
