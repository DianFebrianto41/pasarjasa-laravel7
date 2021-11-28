@extends('layouts/templateAdmin')

@section('title', 'dashboard Layanan')

@section('container')
<div class="container-fluid mt-5">
  @if (session('status'))
  <div class="alert alert-primary" role="alert">
  {{session('status')}}
  </div>
  @endif
  <div class="row">
    <div class="col-md-6">
        <h3>Tabel Layanan</h3>
    </div>
</div>
  <div class="row">
      <div class="col-md-12">
          <div class="card border-0 shadow rounded">
              <div class="card-body">
                  <a href="{{ route('layanan.tambah') }}" class="btn btn-md btn-success mb-3">TAMBAH Layanan</a>
                  <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">NAMA</th>
                          <th scope="col">FILE</th>
                          <th scope="col">KETERANGAN</th>
                          <th scope="col">AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($layananAll as $all)
                          <tr>
                            <td>{{ $all->judul }}</td>
                            <td class="text-center">
                                <img src="{{ asset('uploads/layanan/'.$all->file ) }}" class="rounded" style="width: 150px">
                                {{-- <img src="{{ Storage::url('public/info/').$i->info}}" class="rounded" style="width: 150px"> --}}
                              </td>
                            </td>
                              <td>{!! $all->keterangan !!}</td>
                              <td class="text-center">
                                  <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('layanan.destroy', $all->id) }}" method="POST">
                                      <a href="{{ route('layanan.edit', $all->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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
                    {{ $layananAll->links() }}
              </div>
          </div>
      </div>
  </div>
</div>

@endsection   
