@extends('admin.layout.app')

@section('content')
<div class="content-wrapper" style="min-height: 1302.12px;">


    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ubah Jabatan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Jabatan</li>
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
                            <a href="{{ route('jenisproduk.index') }}" class="btn btn-success btn-sm"><< Kembali</a>
                        </div>

                        <div class="card-body">

                            <form action="{{ route('jenisproduk.store') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="nama" class="col-md-4">Nama</label>
                                    <input type="hidden" name="id" value="{{ $jenis_produks->id }}">
                                    <input type="text" value="{{ $jenis_produks->nama }}" name="nama" id="nama" class="form-control col-md-8" required>
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