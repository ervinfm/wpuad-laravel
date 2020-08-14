@extends('layout.main')

@section('title', 'Form Update Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-8 mt-3">
            <h1> Form Update Data Mahasiswa</h1>

            <form method="POST" action="/students/{{$student->id}}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $student->nama }}">
                    @error('nama')
                    <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan Nim" name="nim" value="{{ $student->nim }}">
                    @error('nim')
                    <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{ $student->email }}">
                    @error('email')
                    <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ $student->jurusan }}">
                    @error('jurusan')
                    <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary"> Update Data!</button>

            </form>
        </div>
    </div>
</div>
@endsection