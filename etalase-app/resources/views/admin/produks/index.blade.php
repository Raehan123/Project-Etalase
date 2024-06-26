@extends('admin.layout.app')
@push('style')
@endpush
@section('content')
    
<div class="content-wrapper" style="min-height: 1302.12px;">


    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List Jenis Produk</h1>
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
                        <div class="card-header">
                            <h3 class="card-title">List Produk</h3>
                        </div>

                        <div class="card-body">
                            <a href="{{ route('produk.create')}}" class="btn btn-primary btn-sm">+ Tambah</a>
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row mt-3">
                                    <div class="col-sm-12 col-md-6"></div>
                                    <div class="col-sm-12 col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2"
                                            class="table table-bordered table-hover dataTable dtr-inline"
                                            aria-describedby="example2_info">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode</th>
                                                    <th>Nama Produk</th>
                                                    <th>Harga Produk</th>
                                                    <th>Stok</th>
                                                    <th>Rating</th>
                                                    <th>Minimal Stok</th>
                                                    <th>Jenis Produk id</th>
                                                    <th>Deskripsi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($produks as $produk)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $produk->kode }}</td>
                                                        <td>{{ $produk->nama }}</td>
                                                        <td>{{ $produk->harga }}</td>
                                                        <td>{{ $produk->stok }}</td>
                                                        <td>{{ $produk->rating }}</td>
                                                        <td>{{ $produk->min_stok }}</td>
                                                        <td>{{$produk->jenis_produk_id}}</td>
                                                        <td>{{ $produk->deskripsi }}</td>
                                                        <td class="d-flex"><a href="{{ route('produk.edit', $produk->id) }}" onclick="if(!confirm('Yakin Mau di Edit nih?')) {return false}" class="btn btn-primary btn-sm"><em>Edit</em></a> 
                                                            <form method="POST" action="{{ route('produk.delete', $produk->id) }}">
                                                                @csrf
                                                                @method('delete')
                                                                <button onclick="if(!confirm('Yakin dihapus nih?')) {return false}" type="submit" class="btn btn-danger btn-sm ml-2"><em>Hapus</em></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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

@push('script')
@endpush