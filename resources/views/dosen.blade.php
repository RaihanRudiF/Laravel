<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>
    <h1>Data Dosen</h1>
    <a href="{{ route('dosenadd')}}">Input data</a>
   <table border>
       <tr>
           <th>id</th>
           <th>nama</th>
           <th>jk</th>
           <th>matkul</th>
           <th>Aksi</th>
       </tr>
       @foreach($dosen as $data)
       <tr>
           <td>{{ $data->id }}</td>
           <td>{{ $data->nama }}</td>
           <td>{{ $data->jk }}</td>
           <td>{{ $data->matkul }}</td>
           <td>
               <a href="{{ url('dosenedit',$data->id)}}">Edit</a> | <a href="{{ url('dosendelete',$data->id)}}">Hapus</a>
           </td>
       </tr>
       @endforeach
   </table>
</body>
</html>