<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>LaporBanjir - BPBD Kabupaten Bandung</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f7f6; margin: 40px; }
        .card { background: white; padding: 25px; border-radius: 8px; max-width: 500px; margin: auto; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        h2 { color: #d9534f; margin-top: 0; }
        label { font-weight: bold; display: block; margin-top: 10px; }
        input[type="text"], input[type="number"] { width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box; }
        button { background: #d9534f; color: white; border: none; padding: 10px 15px; margin-top: 15px; cursor: pointer; border-radius: 4px; width: 100%; }
        button:hover { background: #c9302c; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Form Lapor Banjir</h2>
        <form action="/proses-banjir" method="post">
            @csrf
            <label>Nama Pelapor:</label>
            <input type="text" name="nama_pelapor" required>

            <label>Lokasi Kejadian (Kecamatan/Desa):</label>
            <input type="text" name="lokasi" required>

            <label>Tinggi Genangan Air (cm):</label>
            <input type="number" name="tinggi_air" required>

            <button type="submit">Kirim Laporan</button>
        </form>
    </div>
</body>
</html>