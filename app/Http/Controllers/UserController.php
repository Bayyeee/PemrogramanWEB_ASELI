<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return view('Data.data-pengguna');
    // }

    // UNTUK MENAMPILKAN DATA PENGGUNA -> HANYA BISA DIAKSES OLEH ADMIN
    public function index()
    {
        if(auth()->user()->level == "admin"){
            $usr = User::all();
            return view('Data.data-pengguna', compact('usr'));
        }
        return view('notFound');
    }

    // UNTUK EDIT DATA PENGGUNA -> HANYA BISA DIAKSES OLEH ADMIN
    public function edit($id) {
        $usr = User::FindOrFail($id);
        return view('Data.ubah-pengguna', compact('usr'));
    }

    // UNTUK MENYIMPAN HASIL EDIT -> HANYA BISA DIAKSES OLEH ADMIN
    public function simpanUbahPengguna(Request $request, $id)
    {
        if($request->password){
            // DIGUNAKAN UNTUK EDIT DATA NAMA, EMAIL, DAN PASSWORD
            User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            return redirect ('data-pengguna')->with('success', 'Task Edited Successfully!');;
        }else
        if (!$request->password){
            // DIGUNAKAN UNTUK EDIT DATA NAMA DAN EMAIL SAJA
            User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            return redirect ('data-pengguna')->with('success', 'Task Edited Successfully!');
        }
    }
    // UNTUK MENGHAPUS FILE YANG ADA DI DATABASE
    public function hapusPengguna($id)
    {
        $usr = User::findOrFail($id);
        $usr->delete();
        return back()->with('info', 'Delete Successfully!');;
    }
}
