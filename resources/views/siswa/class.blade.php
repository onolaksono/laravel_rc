@extends('layouts.mainLayout')

@section('judul', 'class')

@section('content')
    <table class="table">
        <tr>
            <td>No.</td>
            <td>id</td>
            <td>name</td>
        </tr>
        @foreach ($class as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->id }}</td>
            <td>{{ $data->name }}</td>
        </tr>
        @endforeach
    </table>
@endsection
