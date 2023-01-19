<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body>
    <nav class="nav">

    </nav>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header  bg-primary text-white">
                Profil
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label>
                            Nama
                        </label>
                        <input type="text" name="tname" class="form-control mt-1" placeholder=" Nama" required>
                        </input>
                    </div>
                    <div class="form-group mt-3">
                        <label>
                            Bio
                        </label>
                        <textarea name="tbio" class="form-control mt-1" placeholder=" Bio"> </textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label>
                            Alamat
                        </label>
                        <textarea name="talamat" class="form-control mt-1" placeholder=" Alamat"> </textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label>
                            JenisKelamin
                        </label>
                        <select class="form-control" name="tkelamin">
                            <option></option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                        </input>
                    </div>
                    <div class="form-group mt-3">
                        <label>
                            NoTelepon
                        </label>
                        <input type="text" name="telpon" class="form-control mt-1" placeholder=" Telepon" required>
                        </input>
                    </div>
                    <div class="form-group mt-3">
                        <label>
                            Foto
                        </label>
                        <input type="text" name="tfoto" class="form-control mt-1">
                        </input>
                    </div>

                    <button type="submit" class=" btn btn-success mt-3" name="bsimpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header  bg-primary text-white">
                DataView
            </div>
            <div class="card-body">
                <div class="card-group">
                    <div class="card">
                        <img src="zeroto.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ultraman Index</h5>
                            <p class="card-text"><em>I'm ultraman best in the world japan, and me role is fighter. Love you all.</em></p>
                            <p class="card-text"><em>Japan, Tokyo, Jl.Sutoyo No.12</em></p>
                            <p class="card-text"><em>Laki-Laki</em></p>
                            <p class="card-text"><em>+13 3455 6533</em></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ultraman Index</h5>
                            <p class="card-text"><em>I'm ultraman best in the world japan, and me role is fighter. Love you all.</em></p>
                            <p class="card-text"><em>Japan, Tokyo, Jl.Sutoyo No.12</em></p>
                            <p class="card-text"><em>Laki-Laki</em></p>
                            <p class="card-text"><em>+13 3455 6533</em></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ultraman Index</h5>
                            <p class="card-text"><em>I'm ultraman best in the world japan, and me role is fighter. Love you all.</em></p>
                            <p class="card-text"><em>Japan, Tokyo, Jl.Sutoyo No.12</em></p>
                            <p class="card-text"><em>Laki-Laki</em></p>
                            <p class="card-text"><em>+13 3455 6533</em></p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>