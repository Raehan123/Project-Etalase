@extends('admin.layout.app')

@section('content')
<div class="content-wrapper" style="min-height: 1302.12px;">


    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Testimoni</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Testimoni</li>
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
                            <a href="{{ route('testimoni.index') }}" class="btn btn-success btn-sm"><< Kembali</a>
                        </div>

                        <div class="card-body">

                            <form action="{{ route('testimoni.store') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="tanggal" class="col-md-4">Tanggal</label>
                                    <input type="date" name="tanggal" id="tanggal" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_tokoh" class="col-md-4">Nama Toko Produk</label>
                                    <input type="text" name="nama_tokoh" id="nama_tokoh" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="komentar" class="col-md-4">Komentar</label>
                                    <input type="text" name="komentar" id="komentar" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="rating" class="col-md-4">Rating</label>
                                    <input type="number" name="rating" id="rating" class="form-control col-md-8" min="1" max="5" required>
                                </div>
                                <div class="form-group row">
                                    <label for="produk_id" class="col-md-4">Jenis Produk id</label>
                                    <select name="produk_id" id="produk_id" class="form-control col-md-8">
                                        <option value="" hidden>Pilih Produk</option>
                                        @foreach ($produks as $produk)
                                            <option value="{{ $produk->id}}">{{ $produk->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label for="kategori_tokoh_id" class="col-md-4">Kategori Tokoh id</label>
                                    <select name="kategori_tokoh_id" id="kategori_tokoh_id" class="form-control col-md-8">
                                        <option value="" hidden>Pilih Kategori Toko</option>
                                        @foreach ($kategori_tokohs as $kategori_tokoh)
                                            <option value="{{ $kategori_tokoh->id}}">{{ $kategori_tokoh->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="submit" value="Tambah" class="btn btn-primary">
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