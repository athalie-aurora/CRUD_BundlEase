<?php

namespace App\Http\Controllers;
use App\Models\Hirer;
use Illuminate\Http\Request;

class HirerController extends Controller
{
    public function landingpage(){
        return view("hirer.landingpage");
    }
    
    public function index()
    {
        $data = Hirer::all();
        return view('hirer.index', compact('data'));
    }

    public function create()
    {
        return view('hirer.create');
    }

    public function store(Request $request){
        //dd($request->all());
        $data = Hirer::create($request->all());

        return redirect()->route('hirer.index')->with('success','Data Berhasil Di Buat');
    }

    public function tampilkandata($id){

        $data = Hirer::find($id);
        //dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Hirer::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('success','Data Berhasil Di Update');

    }

    public function delete($id){
        $data = Hirer::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('success','Data Berhasil Di Delete');

    }
}
