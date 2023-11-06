@extends('utama')

@section('form_coba')
<!-- resources/views/form.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="/form">
    @csrf <!-- Untuk melindungi dari serangan Cross-Site Request Forgery (CSRF) -->
    <div>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
    </div>
    <div>
        <label for="nmp">NMP:</label>
        <input type="text" name="nmp" id="nmp">
    </div>
    <div>
        <label for="nilai">Nilai:</label>
        <input type="text" name="nilai" id="nilai">
    </div>
    <button type="submit">Kirim</button>
</form>

</body>
</html>


@endsection