<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisProduk;
use Illuminate\Http\Request;

class JenisProdukController extends Controller
{
    public function index()
    {
        $jenis_produks = JenisProduk::all();

        return view('admin.jenis_produks.index', compact('jenis_produks'));
    }

    public function create()
    {
        return view('admin.jenis_produks.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "nama" => 'required'
            ]);

        if (isset($request->id)) {
            # update
            $jenis_produks = JenisProduk::find($request->id);
            $jenis_produks ->update($data);
        } else {    
            JenisProduk::create($data);
        }

        return redirect()->route('jenisproduk.index');
    }

    public function delete(string $id)
        {
            $jenis_produks = JenisProduk::find($id);
            $jenis_produks->delete();

            return redirect()->route('jenisproduk.index');
        }

    public function edit(string $id)
        {
            $jenis_produks = JenisProduk::find($id);
            if (!$jenis_produks) {
                return redirect()->back();
            }


            return view('admin.jenis_produks.edit', compact('jenis_produks'));
        }
}
