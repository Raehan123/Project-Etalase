@extends('admin.layout.app')

@section('content')
<div class="content-wrapper" style="min-height: 1302.12px;">


    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ubah Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Produk</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <a href="{{ route('produk.index') }}" class="btn btn-success btn-sm"><< Kembali</a>
                        </div>

                        <div class="card-body">

                            <form action="{{ route('produk.store') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="kode" class="col-md-4">Kode</label>
                                    <input type="hidden" name="id" value="{{ $produks->id }}">
                                    <input type="text" name="kode" value="{{ $produks->kode }}"id="title" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-md-4">Nama Produk</label>
                                    <input type="text" name="nama" value="{{ $produks->nama }}" id="nama" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="harga" class="col-md-4">Harga Produk</label>
                                    <input type="number" name="harga" id="harga" value="{{ $produks->harga }}" class="form-control col-md-8">
                                </div>
                                <div class="form-group row">
                                    <label for="stok" class="col-md-4">Stok</label>
                                    <input type="text" name="stok" value="{{ $produks->stok }}" id="stok" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="rating" class="col-md-4">Rating</label>
                                    <input type="number" name="rating" value="{{ $produks->rating }}" id="rating" class="form-control col-md-8" min="1" max="5" required>
                                </div>
                                <div class="form-group row">
                                    <label for="min_stok" class="col-md-4">Minimal Stok</label>
                                    <input type="number" name="min_stok" value="{{ $produks->min_stok }}" id="min_stok" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis_produk_id" class="col-md-4">Jenis Produk id</label>
                                    <select name="jenis_produk_id" id="jenis_produk_id" class="form_control col-md-8">
                                        <option value="" hidden>Pilih Jenis Produk</option>
                                         @foreach ($jenis_produks as $jenis_produk)
                                            <option value="{{ $jenis_produk->id}}">{{ $jenis_produk->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label for="deskripsi" class="col-md-4">Deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="submit" value="Ubah" class="btn btn-primary">
                                </div>
                            </form>
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6"></div>
                                    <div class="col-sm-12 col-md-6"></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-12">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>

</div>
@endsection