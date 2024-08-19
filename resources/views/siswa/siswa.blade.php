<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ini untuk siswa {{ $data['nis'] }}</h1>
    <table>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td>{{ $data['nis']}}</td>
        </tr>
        <tr>
            <td>nama</td>
            <td>:</td>
            <td>{{ $data['nama_siswa'] }}</td>
        </tr>
        <tr>
            <td>jurusan</td>
            <td>:</td>
            <td>{{$data['jurusan']}}</td>
        </tr>
        <tr>
            <td>tingkat</td>
            <td>:</td>
            <td>{{$data['tingkat']}}</td>
        </tr>
        <tr>
            <td>eskul</td>
            <td>:</td>
            <td>{{$data['eskul']}}</td>
        </tr>
    </table>

</body>
</html>
