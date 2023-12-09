<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function first(Request $request){
        if($request->all() != []){
            return view('welcome', [
                'datas'=>$request
            ]);
        }
        return view('welcome');
    }
    public function second(){
        return view('task2', [
            'datas'=>Pegawai::get()
        ]);
    }
    public function upload($file){
        $url = $file->store('images');

        return[
            "filename" => $file->hashName(),
            "path" => "/" . explode("/", $url)[0]. "/",
            "type" => $file->extension(),
            "size" => $file->getSize(),
        ];
        
    }
    public function original($img){
        $store = $img->store('/original');
        $storeExplode = explode('/', $store);

        $save = $img->move('original/', $storeExplode[1]);
        // dd($img->hashName());
        return[
            "filename" => $storeExplode[1],
            "path" => "/original/",
            "full" => "/original/".$storeExplode[1],
        ];
    }
    public function secondvalue(Request $request){
        $gambar_original = $this->original($request->file('foto'));
        // dd();
        Pegawai::create([
            'pegawai_nama'=>$request->name,
            'pegawai_umur'=>$request->age,
            'pegawai_alamat'=>$request->address,
            'foto'=>$gambar_original['full'],
        ]);
        return redirect('/task2');
    }
    public function seconddelete($id){
        Pegawai::where('pegawai_id',$id)->delete();
        return redirect('/task2');
    }
    public function secondedit(Request $request, $id){
        // dd();
        $a = Pegawai::where('pegawai_id',$id)->update([
            'pegawai_nama'=>$request->name,
            'pegawai_umur'=>$request->age,
            'pegawai_alamat'=>$request->address,
        ]);
        // dd($a);
        return redirect('/task2');
    }

}
