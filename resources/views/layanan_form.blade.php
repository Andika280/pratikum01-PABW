<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Layanan Publik</title>
    <style>
        body { font-family: Arial, sans-serif; background: #e3f2fd; margin: 40px; }
        .box { background: white; padding: 25px; border-radius: 8px; max-width: 450px; margin: auto; border-top: 5px solid #1e88e5; }
        h2 { color: #1e88e5; text-align: center; margin-top: 0; }
        input, select, textarea { width: 100%; padding: 8px; margin: 8px 0; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { background: #1e88e5; color: white; border: none; padding: 10px; width: 100%; border-radius: 4px; cursor: pointer; font-weight: bold; }
        button:hover { background: #1565c0; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Pendaftaran Layanan Public</h2>
        <form action="/layanan/proses" method="post">
            @csrf
            <label>Nama Layanan:</label>
            <input type="text" name="nama_layanan" placeholder="Contoh: Pembuatan KTP Digital" required>

            <label>Kategori:</label>
            <select name="kategori" required>
                <option value="Administrasi">Administrasi</option>
                <option value="Infrastruktur">Infrastruktur</option>
                <option value="Kesehatan">Kesehatan</option>
            </select>

            <label>Deskripsi Layanan:</label>
            <textarea name="deskripsi" rows="3" required></textarea>

            <button type="submit">Simpan Layanan</button>
        </form>
    </div>
</body>
</html>