<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Siswa</title>
    <style>
        th,td {
            text-align: center;
        }
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand px-5" href="#">Biodata Siswa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto px-5">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/biodata">Biodata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/tambah">Tambah</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container mt-3">
        <h3 align="center"><b>SMK ASSALAAM BANDUNG</b></h3>
    </div>

    <div class="row justify-content-center">
        <div class="col-8">
        <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jenis kelamin</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Kelas</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($biodata as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->jenis_kelamin }}</td>
                <td>{{ $data->jurusan }}</td>
                <td>{{ $data->kelas }}</td>
                <td>{{ $data->tempat_lahir }}</td>
                <td>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus{{$data->id}}">
                        Hapus
                    </button>
                    <a href="/biodata/{{$data->id}}/edit" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>
        </div>
    </div>

    @foreach ($biodata as $data)
<div class="modal fade" id="hapus{{$data->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="/biodata/{{$data->id}}" method="POST" class="modal-content">
        @csrf
        @method('DELETE')
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah yakin ingin menghapus data {{ $data->nama}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Hapus Data</button>
      </div>
    </form>
  </div>
</div>
    @endforeach

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>