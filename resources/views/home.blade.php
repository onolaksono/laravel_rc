@extends('layouts.mainLayout')

{{-- judul konten  --}}
@section('judul', 'Data Siswa')
{{-- isi konten yang akan ditampilkan --}}
@section('content')
    <div class="mt-5">
        <h1>Ini Halaman Home</h1>
        <h3>Selamat Datang, {{ $nama }}. Role anda adalah {{ $role }} </h3>

        @if ($role == 'admin')
            <a href="#">Menuju Halaman Admin</a>
        @elseif ($role == 'petugas')
            <a href="#">Menuju Halaman Petugas</a>
        @else
            Role anda tidak terdaftar
        @endif
        <br>
        <h1>Data Siswa</h1>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <td>No</td>
                    <td>NIS</td>
                    <td>Nama Siswa</td>
                    <td>Jurusan</td>
                    <td>Tingkat</td>
                    <td>Eskul</td>
                </tr>
            </thead>
            <tbody>
                {{-- perulangan dilakukan hanya untuk barisnya saja --}}
                @foreach ($data as $siswa)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $siswa['nis'] }}</td>
                        <td>{{ $siswa['nama_siswa'] }}</td>
                        <td>{{ $siswa['jurusan'] }}</td>
                        <td>{{ $siswa['tingkat'] }}</td>
                        <td>{{ $siswa['eskul'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection
