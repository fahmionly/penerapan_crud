@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Mobil</div>

                <div class="card-body">
                    <form action="{{route('mobil.update', $mobil->id)}}" method="post">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group">
                            <label> Nama Mobil </label>
                            <input type="text" class="form-control mt-2" value="{{$mobil->nama_mobil}}" name="nama_mobil">
                        </div>
                        <div class="form-group">
                            <label> Warna Mobil </label>
                            <input type="text" class="form-control mt-2" value="{{$mobil->warna}}" name="warna">
                        </div>
                        <div class="form-group">
                            <label> Plat Nomor </label>
                            <input type="text" class="form-control mt-2" value="{{$mobil->plat_mobil}}" name="plat_mobil">
                        </div>   
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-success">Ubah</button>
                            <a href="/mobil" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
