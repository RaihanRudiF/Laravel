<?php

namespace App\Http\Controllers;
use App\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $dosen = Dosen::all();

        return view('dosen',compact('dosen'));
    }
    public function create(){
       return view('doseninput');
    }
    public function inputdata(Request $request){
        Dosen::create([
            'nama'=>$request->nama,
            'jk'=>$request->jk,
            'matkul'=>$request->matkul,
        ]);
        

        return redirect('dosen');
    }
    public function edit($id)
    {
        $dos = Dosen::findorfail($id);
        return view('dosenedit',compact('dos'));
    }

    public function update(Request $request, $id)
    {
        $dos = Dosen::findorfail($id);
        $dos->update($request->all());

        return redirect('dosen');
    }

    public function destroy($id)
    {
        $dos = Dosen::findorfail($id);
        $dos->delete();
        return back();
    }
}
