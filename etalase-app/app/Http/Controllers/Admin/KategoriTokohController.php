<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriTokoh;


class KategoriTokohController extends Controller
{
    public function index()
    {
        $kategori_tokohs = KategoriTokoh::all();

        return view('admin.kategori_tokohs.index', compact('kategori_tokohs'));
    }
    public function create()
    {
        return view('admin.kategori_tokohs.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            "nama" => 'required'
            ]);

        if (isset($request->id)) {
            # update
            $kategori_tokohs = KategoriTokoh::find($request->id);
            $kategori_tokohs ->update($data);
        } else {    
            KategoriTokoh::create($data);
        }

        return redirect()->route('kategoritokoh.index');
    }

    public function delete(string $id)
        {
            $kategori_tokohs = KategoriTokoh::find($id);
            $kategori_tokohs->delete();

            return redirect()->route('kategoritokoh.index');
        }

    public function edit(string $id)
        {
            $kategori_tokohs = KategoriTokoh::find($id);
            if (!$kategori_tokohs) {
                return redirect()->back();
            }


            return view('admin.kategori_tokohs.edit', compact('kategori_tokohs'));
        }

}
