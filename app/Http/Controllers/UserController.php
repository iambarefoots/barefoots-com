<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    //GET ALL RECORDS
    public function get_all() {
        $mahasiswa = Mahasiswa::with(array('matkul'=>function($query){
            $query->select('mahasiswa_NIM','nama_matkul');
        }))->get();
        return json_encode($mahasiswa,JSON_PRETTY_PRINT);
    }
    //TAMBAH MAHASISWA
    public function add_mhs(Request $request, Mahasiswa $mahasiswa) {
        $this->validate($request,[
            'NIM'  => 'required',
            'nama' => 'required'
        ]);
        $mahasiswa->create([
            'NIM'   =>  $request->NIM,
            'nama'  =>  $request->nama
        ]);
        return 'Berhasil Menambahkan Mahasiswa';
    }
    //TAMBAH MATKUL
    public function add_matkul(Request $request, Mahasiswa $mahasiswa) {
        $this->validate($request,[
            'NIM'   => 'required',
            'nama_matkul'  => 'required'
        ]);
        $mahasiswa = Mahasiswa::findOrFail($request->NIM);
        $mahasiswa->matkul()->create([
            'nama_matkul' => $request->nama_matkul
        ]);
        return 'Berhasil Menambahkan Matkul ' . $request->nama_matkul . ' pada NIM = ' . $request->NIM;
    }
    //DELETE MAHASISWA
    public function delete_mhs(Request $request, Mahasiswa $mahasiswa) {
        $this->validate($request,[
            'NIM'   => 'required'
        ]);
        $mahasiswa = Mahasiswa::findOrFail($request->NIM);
        $mahasiswa->delete();
        return 'Berhasil Menghapus Mahasiswa Dengan NIM = ' . $request->NIM;
    }
    //DELETE MATKUL
    public function delete_matkul(Request $request, Mahasiswa $mahasiswa) {
        $this->validate($request,[
            'NIM'   => 'required',
            'nama_matkul' => 'required'
        ]);
        $mahasiswa = Mahasiswa::findOrFail($request->NIM);
        $mahasiswa->matkul()->where('nama_matkul',$request->nama_matkul)->delete();
        return 'Berhasil Menghapus Matkul ' . $request->nama_matkul .  ' dari Mahasiswa dengan NIM = ' . $request->NIM;
    }
}
