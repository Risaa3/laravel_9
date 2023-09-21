@extends('template.default')

@php
  $title = 'Data Sekolah';
  $preTitle = 'Semua Data';
  @endphp

@push('page-action')
<a href="" class="btn btn-primary">Tambah Data</a>
@endpush

@section('body')
<h1>Sekolah</h1>
<div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table table-striped">
                      <thead>
                        <tr>
                          <th>Nama sekolah</th>
                          <th>Alamat sekolah</th>
                          <th>Kelas</th>
                          <th>Jumlah Guru</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($sekolahs as $sekolah)
                        <tr>
                           

                            <td>{{ $sekolah -> nama_sekolah}}</td>
                            <td>{{ $sekolah -> alamat}}</td>
                            <td>{{ $sekolah -> jurusan}}</td>
                            <td>{{ $sekolah -> jumlah_guru}}</td>
                          <td>
                            <a href="{{ route('sekolahs.edit', $sekolah->id) }}">Edit</a>
                            <form action="{{ route('sekolahs.destroy', $sekolah->id) }}" method="post">
                              @csrf
                              @method('DELETE')
                              <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                              </form>
                            </td>
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection