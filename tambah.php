<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kegiatan</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, sans-serif;
        }

        body {
            background: #f0fdf4;
            padding: 20px;
            color: #064e3b;
            font-weight: 600;
        }

        h1 {
            text-align: center;
            color: #065f46;
            margin-bottom: 20px;
        }

        form {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        textarea {
            grid-column: span 2;
            resize: vertical;
            min-height: 80px;
        }

        button {
            grid-column: span 2;
            padding: 12px;
            background: linear-gradient(to right, #10b981, #059669);
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 10px;
            cursor: pointer;
            font-size: 15px;
        }

        button:hover {
            opacity: 0.9;
        }

        a {
            display: block;
            margin-top: 15px;
            text-align: center;
            color: #047857;
            font-weight: bold;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            form {
                grid-template-columns: 1fr;
            }
            textarea,
            button {
                grid-column: span 1;
            }
        }
    </style>
</head>
<body>

<h1>Tambah Kegiatan</h1>

<form action="simpan.php" method="POST">
    <input name="kegiatan" placeholder="Kegiatan" required>

    <select name="status">
        <option>Not Started</option>
        <option>In Progress</option>
        <option>Blocked</option>
        <option>Completed</option>
    </select>

    <input name="penanggung_jawab" placeholder="Penanggung Jawab">
    <input name="peserta" placeholder="Peserta">

    <input type="date" name="tanggal_mulai">
    <input type="date" name="tanggal_selesai">

    <input name="tempat" placeholder="Tempat">

    <textarea name="catatan" placeholder="Catatan"></textarea>

    <button type="submit">Simpan</button>
</form>

<a href="index.php">⬅ Kembali</a>

</body>
</html>
