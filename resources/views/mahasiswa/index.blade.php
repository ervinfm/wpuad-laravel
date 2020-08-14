@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-10 mt-3">
            <h1> Daftar Mahasiswa </h1>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th class="scope">#</th>
                        <th class="scope">Nama</th>
                        <th class="scope">NIM</th>
                        <th class="scope">Email</th>
                        <th class="scope">Jurusan</th>
                        <th class="scope">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswa as $mhs)
                    <tr>
                        <th class="scope">{{ $loop->iteration }}</th>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->email }}</td>
                        <td>{{ $mhs->jurusan }}</td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection