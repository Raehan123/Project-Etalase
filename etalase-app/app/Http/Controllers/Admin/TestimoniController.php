<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use App\Models\Produk;
use App\Models\KategoriTokoh;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        $testimonis = Testimoni::all();

        return view('admin.testimonis.index', compact('testimonis'));
    }

    public function create()
    {
        $produks = Produk::all();
        $kategori_tokohs = KategoriTokoh::all();
        return view('admin.testimonis.create', compact('produks', 'kategori_tokohs'));

    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'tanggal' => 'required',
            'nama_tokoh' => 'required',
            'komentar' => 'required',
            'rating' => 'required',
            'produk_id' => 'required',
            'kategori_tokoh_id' => 'required',
        ]);

        if (isset($request->id)) {

            # update
            $testimonis = Testimoni::find($request->id);
            $testimonis->update($data);
        } else {
            Testimoni::create($data);
        }

        return redirect()->route('testimoni.index')->with('success', 'Testimoni created successfully.');
    }

    public function delete(string $id)
    {
        $testimonis = Testimoni::find($id);
        if ($testimonis) {
            $testimonis->delete();
        }

        return redirect()->route('testimoni.index');
    }

    public function edit(string $id)
    {
        $testimoni = Testimoni::find($id);
        if (!$testimoni) {
            return redirect()->back();
        }
        $produks = Produk::all();
        $kategori_tokohs = KategoriTokoh::all();
        return view('admin.testimonis.edit', compact('produks', 'kategori_tokohs', 'testimoni'));

    }
}
