<?php

namespace App\Http\Controllers;

use App\Models\Tentang_gas;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // return view('home');
        $tentang = Tentang_gas::all();
        return view('admin/tentang_gas', compact('tentang'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'deskripsi' => 'required',
        ]);
        $file       = $request->file('gambar');
            //mengambil nama file
        $nama_file  = $file->getClientOriginalName();

            //memindahkan file ke folder tujuan
        $file->move('gambar', $nama_file);

        $tentang = new Tentang_gas();
        $tentang->kategori = $request->kategori;
        $tentang->deskripsi = $request->deskripsi;
        $tentang->gambar = $nama_file;
        $tentang->save();

        return redirect('tentang-gas');
    }
    public function update(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'deskripsi' => 'required',
        ]);

        if($request->hasFile('gambar'))
        {
            $file       = $request->file('gambar');
            //mengambil nama file
            $nama_file  = $file->getClientOriginalName();

            //memindahkan file ke folder tujuan
            $file->move('gambar', $nama_file);

            Tentang_gas::where('id', $request->id)
            ->update([
                'kategori' => $request->kategori,
                'deskripsi' => $request->deskripsi,
                'gambar' => $nama_file,
            ]);
            return redirect('tentang-gas');
        }else{
            Tentang_gas::where('id', $request->id)
            ->update([
                'kategori' => $request->kategori,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect('tentang-gas');
        }
    }

    public function destroy($id)
    {
        $beranda = Tentang_gas::find($id);
        $beranda->delete();
        return redirect('tentang-gas');
    }
}
