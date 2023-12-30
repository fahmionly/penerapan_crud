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
                            <a href="/mobil/create" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <table class="table table-stripped">
                            <thead>
                                <th>Nama Mobil</th>
                                <th>Warna Mobil</th>
                                <th>Plat Nomor </th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($data_mobil as $row)
                                <tr>
                                    <td>{{$row->nama_mobil}}</td>
                                    <td>{{$row->warna}}</td>
                                    <td>{{$row->plat_mobil}}</td>
                                    <td>
                                        <form action="{{route('mobil.destroy', $row->id)}}" method="post">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah kamu mau hapus?')">Hapus</button>
                                        <a href="{{route('mobil.edit', $row->id)}}" class="btn btn-warning">Ubah</a>
                                        <a href="{{route('mobil.show', $row->id)}}" class="btn btn-info">Detail</a>
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
@endsection
