@extends('layouts/templateAdmin')

@section('title', 'dashboard informasi')

@section('container')
<div class="container-fluid mt-5">
  @if (session('success'))
  <div class="alert alert-primary" role="alert">
  {{session('success')}}
  </div>
  @endif
  <div class="row">
    <div class="col-md-6">
        <h3>Tabel Informasi</h3>
    </div>
</div>
  <div class="row">
      <div class="col-md-12">
          <div class="card border-0 shadow rounded">
              <div class="card-body">
                  <a href="{{ route('informasi.tambah') }}" class="btn btn-md btn-success mb-3">TAMBAH INFORMASI</a>
                  <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">JUDUL</th>
                          <th scope="col">JUDUL</th>
                          <th scope="col">DESKRIPSI</th>
                          <th scope="col">FILE</th>
                          <th scope="col">KETERANGAN</th>
                          <th scope="col-md-2">AKSI</th>
                          <th scope="col-md-3">AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($informasiAll as $all)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $all->judul }}</td>
                            <td>{{ $all->deskripsi }}</td>
                            <td class="text-center">
                                <img src="{{ asset('uploads/informasi/'.$all->file ) }}" class="rounded" style="width: 150px">
                                {{-- <img src="{{ Storage::url('public/info/').$i->info}}" class="rounded" style="width: 150px"> --}}
                              </td>
                            </td>
                              <td>{!! $all->keterangan !!}</td>
                              <td class="text-center">
                                  <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('informasi.destroy', $all->id) }}" method="POST">
                                      <a href="{{ route('informasi.edit', $all->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                      @csrf
                                      @method('DELETE')
                                      {{ method_field('PUT') }}
                                      <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                  </form>
                              </td>
                          </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Informasi belum Tersedia.
                            </div>
                        @endforelse
                      </tbody>
                    </table>  
                    {{ $informasiAll->links() }}
              </div>
          </div>
      </div>
  </div>
</div>

@endsection   
