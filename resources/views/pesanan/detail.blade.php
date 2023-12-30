@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Pesanan</div>

                <div class="card-body">
                    <div class="table-responsive p-2">
                        <div class="m-2">
                            <a href="/pesanan" class="btn btn-danger">Kembali</a>
                        </div>
                        <table class="table table-stripped">
                            <tr>
                                <th>Nama Makanan</th>
                                <td>{{$pesanan->makanan->nama_makanan}}</td>
                            </tr>
                            <tr>
                                <th>Nama Pemesan</th>
                                <td>{{$pesanan->nama_pemesan}}</td>
                            </tr>
                            <tr>
                                <th>Jumlah</th>
                                <td>{{$pesanan->jumlah}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
