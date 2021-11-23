<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Dosen</title>
</head>
<body>
    <h1>Edit Data Dosen</h1>
<a href="{{ route('dosenlist') }}">Kembali</a>
    <form action="{{ url('dosenupdate',$dos->id) }}" method="post">
        @csrf
        Nama <input type="text" name="nama" id="nama" value="{{ $dos->nama }}"><br>
        Jenis Kelamin <input type="text" name="jk" id="jk" value="{{ $dos->jk }}"><br>
        Mata Kuliah <input type="text" name="matkul" id="matkul" value="{{ $dos->matkul }}"><br>
        <input type="submit" value="Ubah Data">
    </form>
    
</body>
</html>