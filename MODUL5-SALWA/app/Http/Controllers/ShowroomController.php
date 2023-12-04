<?php

namespace App\Http\Controllers;

use App\Models\showroom_mobil;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function create(){
        return view("showroom.create");
    }
    public function store(Request $request){
        $data=$request->all();
        showroom_mobil::create([
            "nama_mobil"=>$data["name"],
            "brand_mobil"=> $data["brand"],
            "warna_mobil"=> $data["warna"],
            "tipe_mobil"=> $data["tipe"],
            "harga_mobil"=> $data["harga"],
        ]);
    }
    public function index(){
        $showroom = showroom_mobil::all();
        return view("showroom.index", compact("showroom"));
    }
}
