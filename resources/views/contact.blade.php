@extends('layouts.mainLayout')

@section('content')
    <h1>Ini Halaman Contact</h1>
    <h2>Nama Siswa : {{ $nama_siswa }}</h2>
    <h2>Kelas : {{ $kelas }}</h2>
    <h2>Alamat : {{ $alamat }}</h2>
    <h2>No Telepon : {{ $telp }}</h2>
@endsection
