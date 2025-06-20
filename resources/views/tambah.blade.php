<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project aritmatika</title>
</head>

<body>
    <h1>Kalkulator Sederhana</h1>
    <h3>{{ $title ?? '' }}</h3>
    <a href="{{ route('tambah') }}">Kembali</a>

    <form action="{{ route('tambah-action') }}" method="post">
        @csrf
        <label for="">Angka 1</label>
        <input type="number" name="angka1" placeholder="Angka Pertama">
        <br>
        <label for="">Angka 2</label>
        <input type="number" name="angka2" placeholder="Angka Kedua">
        <br>
        <button type="sumbit">Hitung</button>
    </form>

    <h1>Hasil:</h1>
    <br>
    <h4>{{ $angka1 ?? 0 }} + {{ $angka2 ?? 0 }} = {{ $jumlah }}</h4>
    {{-- <h4>{{ $angka1 . '+' . $angka2 . '=' . $jumlah }}</h4> --}}

</body>

</html>
