<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title>Detail_Siswa</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Pegawai - <strong>Detail Siswa</strong> 
                </div>
                <div class="card-body">
                    <a href="" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    <form method="post" action="/siswa/update/{{ $siswas->id }}">

<hr>
                        <div class="form-group">
                            <label>Nama : </label>
                            <input type="text" disabled class="bg-white form-control" placeholder="Nama Siswa .." value=" {{ $siswas->nama }}">

                        </div>
<hr>
                        <div class="form-group">
                            <label>Kelas : </label>
                            <input type="text" disabled class="bg-white form-control" placeholder="Kelas Siswa .." value=" {{ $siswas->kelas }}">

                        </div>
                        <hr>
                        <div class="form-group">
                            <label>Jurusan : </label>
                            <input type="text" disabled class="bg-white form-control" placeholder="Jurusan .." value=" {{ $siswas->jurusan }}">

                             @if($errors->has('jurusan'))
                                <div class="text-danger">
                                    {{ $errors->first('jurusan')}}
                                </div>
                            @endif

                        </div>
                    </form>

                </div>
            </div>
        </div>
              <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    </body>
    </body>
</html>