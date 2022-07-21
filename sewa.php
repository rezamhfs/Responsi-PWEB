<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN AKUN</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
</head>

<body class='gambar'>
    <div class='container row mx-auto mt-4' >
        <div class="col-5 mx-auto mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class='text-center'>Permintaan Sewa</h3>
                </div>
                <div class="card-body">

                    <form name="fform" action="proses.php" method="POST"  >
                        
                        <div class="mb-3" >
                            <label for="inputNama" class="form-label">Nama</label>
                            <input name="nama" placeholder='Input disini...' type="text" class="form-control" id="nama" require>
                        </div>

                        <div class="mb-3">
                            <label for="inputNoHp" class="form-label">No HP</label>
                            <input name="nohp" placeholder='Input disini...' type="text" class="form-control" id="nohp">
                        </div>

                        <div class="mb-3">
                            <label for="inputNoHp" class="form-label">Email</label>
                            <input name="email" placeholder='Input disini...' type="text" class="form-control" id="email">
                        </div>

                        <div class="mb-3">
                            <label for="inputNoHp" class="form-label">Alamat</label>
                            <input name="alamat" placeholder='Input disini...' type="text" class="form-control" id="alamat">
                        </div>

                        <div class="mb-3">
                            <label for="inputNoHp" class="form-label">Mulai Tanggal Sewa</label>
                            <input name="tanggal" placeholder='Input disini...' type="date" class="form-control" id="tanggal   ">
                        </div>

                        

                        <hr>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>

                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


    </body>

</html>