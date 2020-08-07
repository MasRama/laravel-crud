<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{ 

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
    	$resell = DB::table('resell')->paginate(10);
    	return view('index',['resell' => $resell]);
    }

    public function tambah() {
    	return view('tambah');
    }


    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('resell')->insert([
		'res_kode' => $request->kode,
		'res_name' => $request->name,
		'res_link' => $request->link
	]);
	return redirect('/data');
    }

    
    public function edit($id)
    {
	$resell = DB::table('resell')->where('res_id',$id)->get();
	return view('edit',['resell' => $resell]);
    }
    
    
    public function update(Request $request)
    {
	DB::table('resell')->where('res_id',$request->id)->update([
		'res_kode' => $request->kode,
		'res_name' => $request->name,
		'res_link' => $request->link
	]);
	return redirect('/data');
    }

    public function hapus($id)
    {
	DB::table('resell')->where('res_id',$id)->delete();
	return redirect('/data');
    }

    public function cari(Request $request)
	{
		$cari = $request->cari;
		$resell = DB::table('resell')
		->where('res_name','like',"%".$cari."%")
		->paginate();

		return view('index',['resell' => $resell]);
 
	}

}
