<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Laporan - LaporBanjir</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #eef7ee; margin: 40px; }
        .card { background: white; padding: 25px; border-radius: 8px; max-width: 500px; margin: auto; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        .success { color: #5cb85c; }
        a { display: inline-block; margin-top: 15px; text-decoration: none; color: #337ab7; }
    </style>
</head>
<body>
    <div class="card">
        <h2 class="success">Laporan Berhasil Diterima!</h2>
        <p>Terima kasih, laporan Anda telah diproses oleh sistem BPBD Kabupaten Bandung.</p>
        <hr>
        <p><strong>Nama Pelapor:</strong> {{ $nama }}</p>
        <p><strong>Lokasi Kejadian:</strong> {{ $lokasi }}</p>
        <p><strong>Tinggi Genangan:</strong> {{ $tinggi }} cm</p>
        <hr>
        <a href="/lapor-banjir">&larr; Kembali ke Form Pelaporan</a>
    </div>
</body>
</html>