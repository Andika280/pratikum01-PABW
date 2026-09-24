<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Layanan Publik</title>
    <style>
        body { font-family: Arial, sans-serif; background: #e3f2fd; margin: 40px; }
        .box { background: white; padding: 25px; border-radius: 8px; max-width: 450px; margin: auto; border-top: 5px solid #1e88e5; }
        h2 { color: #1e88e5; margin-top: 0; }
        a { color: #1e88e5; text-decoration: none; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Detail Layanan Terdaftar</h2>
        <hr>
        <p><strong>Nama Layanan:</strong> {{ $nama_layanan }}</p>
        <p><strong>Kategori:</strong> {{ $kategori }}</p>
        <p><strong>Deskripsi:</strong> {{ $deskripsi }}</p>
        <hr>
        <a href="/layanan">&larr; Kembali ke Form Input</a>
    </div>
</body>
</html>