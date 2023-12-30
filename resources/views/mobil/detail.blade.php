@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Mobil</div>

                <div class="card-body">
                    <div class="table-responsive p-2">
                        <div class="m-2">
                            <a href="/mobil" class="btn btn-danger">Kembali</a>
                        </div>
                        <table class="table table-stripped">
                            <tr>
                                <th>Nama Mobil</th>
                                <td>{{$mobil->nama_mobil}}</td>
                            </tr>
                            <tr>
                                <th>Warna Mobil</th>
                                <td>{{$mobil->warna}}</td>
                            </tr>
                            <tr>
                                <th>Plat Nomor</th>
                                <td>{{$mobil->plat_mobil}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
