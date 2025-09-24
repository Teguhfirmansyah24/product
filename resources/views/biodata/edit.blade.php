<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Data</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand px-5" href="#">Edit Data</a>
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
    
<form action="/biodata/{{$data->id}}" method="POST">
    @method('PUT')
    @csrf
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Jenis Kelamin</label>
                <input type="text" name="jk" class="form-control" id="formGroupExampleInput2">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" id="formGroupExampleInput2">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Kelas</label>
                <input type="text" name="kelas" class="form-control" id="formGroupExampleInput2">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" id="formGroupExampleInput2">
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </div>
    </div>
</div>
</form>

</body>
</html>