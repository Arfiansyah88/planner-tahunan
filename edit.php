<?php
include "koneksi.php";
$data = mysqli_query($conn, "SELECT * FROM kegiatan WHERE id='$_GET[id]'");
$d = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Kegiatan</title>

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

<h1>Edit Kegiatan</h1>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $d['id'] ?>">

    <input name="kegiatan" value="<?= $d['kegiatan'] ?>" required>

    <select name="status">
        <option <?= $d['status']=="Not Started" ? "selected" : "" ?>>Not Started</option>
        <option <?= $d['status']=="In Progress" ? "selected" : "" ?>>In Progress</option>
        <option <?= $d['status']=="Blocked" ? "selected" : "" ?>>Blocked</option>
        <option <?= $d['status']=="Completed" ? "selected" : "" ?>>Completed</option>
    </select>

    <input name="penanggung_jawab" value="<?= $d['penanggung_jawab'] ?>">
    <input name="peserta" value="<?= $d['peserta'] ?>">

    <input type="date" name="tanggal_mulai" value="<?= $d['tanggal_mulai'] ?>">
    <input type="date" name="tanggal_selesai" value="<?= $d['tanggal_selesai'] ?>">

    <input name="tempat" value="<?= $d['tempat'] ?>">

    <textarea name="catatan"><?= $d['catatan'] ?></textarea>

    <button type="submit">Update</button>
</form>

<a href="index.php">⬅ Kembali</a>

</body>
</html>
