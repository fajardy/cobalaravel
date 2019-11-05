@extends('layout/main')
@section('title','Mahasiswa')
@section('isi_content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <table class="table mt-3">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->Nim }}</td>
                        <td>{{ $item->Nama }}</td>
                        <td>{{ $item->Tanggal_Lahir }}</td>
                        <td>
                            <img width="30px" height="30px" src = "{{ URL::asset('/foto')."/$item->Foto" }}" />
                        </td>
                        <td>
                            <a href="#" class="badge badge-success">Edit</a>
                            <a href="#" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection