<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('admin/beranda');
    }
    public function index()
    {
        // return view('home');
        $beranda = Beranda::all();
        return view('admin/data-beranda', compact('beranda'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        $file       = $request->file('gambar');
            //mengambil nama file
        $nama_file  = $file->getClientOriginalName();

            //memindahkan file ke folder tujuan
        $file->move('gambar', $nama_file);

        $beranda = new Beranda();
        $beranda->judul = $request->judul;
        $beranda->deskripsi = $request->deskripsi;
        $beranda->gambar = $nama_file;
        $beranda->save();

        return redirect('data-beranda');
    }
    public function update(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if($request->hasFile('gambar'))
        {
            $file       = $request->file('gambar');
            //mengambil nama file
            $nama_file  = $file->getClientOriginalName();

            //memindahkan file ke folder tujuan
            $file->move('gambar', $nama_file);

            Beranda::where('id', $request->id)
            ->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'gambar' => $nama_file,
            ]);
            return redirect('data-beranda');
        }else{
            Beranda::where('id', $request->id)
            ->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect('data-beranda');
        }
    }

    public function destroy($id)
    {
        $beranda = Beranda::find($id);
        $beranda->delete();
        return redirect('data-beranda');
    }
}
