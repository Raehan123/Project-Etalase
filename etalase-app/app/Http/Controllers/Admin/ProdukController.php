<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();

        return view('admin.produks.index', compact('produks'));
    }

    public function create()
    {
        $jenis_produks = JenisProduk::all();
        return view('admin.produks.create', compact('jenis_produks'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'rating' => 'required',
            'min_stok' => 'required',
            'jenis_produk_id' => 'required',
            'deskripsi' => 'required',
        ]);

        if (isset($request->id)) {

            # update
            $produks = Produk::find($request->id);
            $produks->update($data);
        } else {
            Produk::create($data);
        }

        return redirect()->route('produk.index')->with('success', 'Produk created successfully.');
    }

    public function delete(string $id)
    {
        $produks = Produk::find($id);
        if ($produks) {
            $produks->delete();
        }

        return redirect()->route('produk.index');
    }

    public function edit(string $id)
    {
        $produks = Produk::find($id);
        if (!$produks) {
            return redirect()->back();
        }
        $jenis_produks = JenisProduk::all();
        return view('admin.produks.edit', compact('jenis_produks', 'produks'));
    }
}
