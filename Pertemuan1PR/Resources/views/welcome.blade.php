<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function validasi()
    {
        return true;
    }
</script>
</head>
<body>
    <div class="container">
        <p>
            <form id="frmDaftar" method="get" action="https://google.co.id" onsubmit="return validasi();">
            NRP :
            <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Isikan 10 digit NRP, harus diisi">
            <br>
            Nama :
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan nama">
            <br>
            <input type="submit" class="btn btn-success" onsubmit="tambah()" value="Daftar">
            </form>
        </p>
    </div>

</body>
</html>
