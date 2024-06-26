@extends('admin.layout.app')

@section('content')
<div class="content-wrapper" style="min-height: 1302.12px;">


    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Kategori Toko</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Kategori Toko</li>
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
                            {{-- <a href="{{ route('kategoritokoh.index') }}" class="btn btn-success btn-sm"><< Kembali</a> --}}
                        </div>

                        <div class="card-body">

                            <form action="{{ route('kategoritokoh.store') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="nama" class="col-md-4">Nama Kategori Toko</label>
                                    <input type="text" name="nama" id="nama" class="form-control col-md-8" required>
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