@extends('layouts.mainLayout')

@section('title', 'Student')

@section('content')
    <h1>Halo Ini halaman Data Siwa</h1>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>gender</th>
            <th>NIS</th>
            <th>Kelas</th>
        </tr>
        @foreach ($siswa as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama_siswa }}</td>
                <td>{{ $data->gender }}</td>
                <td>{{ $data->nis }}</td>
                <td>{{ $data->class_id }}</td>
            </tr>
        @endforeach
    </table>
@endsection
