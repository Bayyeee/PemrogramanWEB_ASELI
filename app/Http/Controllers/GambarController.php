<?php

namespace App\Http\Controllers;

use App\Models\UploadGambar;
use Illuminate\Http\Request;

class GambarController extends Controller
{
    //
    public function gambar() {
        $dataGambar = UploadGambar::latest()->get();
        return view('Data.data-gambar', compact('dataGambar'));
    }

    // public function gambar() {
    //     return view('Data.data-gambar');
    // }

    public function store(Request $request) {
        // dd($request->all());

        $nm = $request->gambar;
        $namaFile = time().rand(100,900).".".$nm->getClientOriginalName();

            $dtUpload = new Uploadgambar;
            $dtUpload->nama = $request->nama;
            $dtUpload->gambar = $namaFile;

            $nm->move(public_path().'/img', $namaFile);
            $dtUpload->save();

            return redirect('/');
    }
}
