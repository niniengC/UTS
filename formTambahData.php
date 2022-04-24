<!DOCTYPE html>
<html>
    <head>
        <title>Entry Data</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <div class="container-sm">
            <header>
                <h3 class="text-center">Tambah Data Baru</h3>
            </header>
            </br>

            <form action="tambahData.php" method="POST">
                <div class="form-floating mb-3 mt-3" >
                    <input type="text" name="nama_ninieng" class="form-control" />
                    <label for="nama_ninieng"><b>nama_ninieng : </b></label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input type="email_ninieng" name="email_ninieng" class="form-control"/>
                    <label for="email_ninieng" ><b>email_ninieng : </b></label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    
                    <input type="alamat_ninieng" name="alamat_ninieng" class="form-control"/>
                    <label for="alamat_ninieng" ><b>alamat_ninieng : </b></label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark">Tambah</button>
                </div>
            </form>
        </div>
    </body>
</html>