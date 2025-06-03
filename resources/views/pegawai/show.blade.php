<!DOCTYPE html>
<html>
<head>
    <title>Detail Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Detail Pegawai</h1>

        <div class="card">
            <div class="card-header">
                <strong>{{ $pegawai->nama }}</strong>
            </div>
            <div class="card-body">
                <p><strong>Jabatan:</strong> {{ $pegawai->jabatan }}</p>
                <p><strong>Umur:</strong> {{ $pegawai->umur }} tahun</p>
                <p><strong>Alamat:</strong> {{ $pegawai->alamat }}</p>
                <p><strong>Ditambahkan pada:</strong> {{ $pegawai->created_at->format('d M Y, H:i') }}</p>
                <p><strong>Diperbarui pada:</strong> {{ $pegawai->updated_at->format('d M Y, H:i') }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('pegawai.index') }}" class="btn btn-primary">Kembali ke Daftar</a>
                <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-warning">Edit</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
