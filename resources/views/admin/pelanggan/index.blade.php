@extends('layouts/templateAdmin')

@section('title', 'dashboard Penyedia Jasa')

@section('container')
<div class="container-fluid mt-5">
    @if (session('status'))
    <div class="alert alert-primary" role="alert">
    {{session('status')}}
    </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <h3>Data Pelanggan</h3>
        </div>
    </div>
<div class="row">
    <div class="col-md-12">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Customer</th>
                        <th scope="col">Alamat Customer</th>
                        <th scope="col">No.Handphone Customer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $d)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->alamat }}</td>
                            <td>{{ $d->nomor_hp }}</td>
                        </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Pelanggan Belum tersedia
                            </div>
                        @endforelse
                    </tbody>
                    </table>

            </div>
        </div>
    </div>
</div>
</div>

@endsection
