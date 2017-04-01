<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa(){
        // $mahasiswa = mahasiswa::all();
        // dd($mahasiswa);
        $mahasiswa = mahasiswa::all();

        foreach($mahasiswa as $mhs){
        echo "Nama : ".$mhs->nama;
        echo "<br>";
        echo "Username : ".$mhs->pengguna->username;
        echo "<br>";
        }

        $mahasiswa = mahasiswa::find(1);
        echo "Nama : ".$mahasiswa->nama;
        echo "<br>";
        echo "Username : ".$mahasiswa->pengguna->username;
    }
    public function awal()
    {
    	// return "Hello Mahasiswa!! Selamat Mengerjakan Postest! XOXO";
         return view ('mahasiswa.awal',['data'=>Mahasiswa::all()]);
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = 'Ganbatte Mahasiswa! :)';
    	$mahasiswa->nim = '1515015000';
    	$mahasiswa->alamat = 'Dimanapun Kapanpun';
    	$mahasiswa->pengguna_id = '2';
    	$mahasiswa->save();
    	return "Data Mahasiswa dengan nama {$mahasiswa->nama} telah disimpan";
    }
}
