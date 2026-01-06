<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Daftar Kegiatan</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>Daftar Kegiatan</h1>

<?php
if (isset($_GET['success'])) {
    echo '<div class="success-msg"> Data kegiatan berhasil ditambahkan</div>';
}
if (isset($_GET['update'])) {
    echo '<div class="success-msg"> Data kegiatan berhasil diperbarui</div>';
}
if (isset($_GET['delete'])) {
    echo '<div class="success-msg"> Data kegiatan berhasil dihapus</div>';
}
?>

<a href="tambah.php" class="add-btn">
    Tambah Kegiatan
</a>

<table>
<tr>
    <th>Kegiatan</th>
    <th>Status</th>
    <th>Penanggung Jawab</th>
    <th>Peserta Kegiatan</th>
    <th>Tanggal Mulai</th>
    <th>Tanggal Selesai</th>
    <th>Tempat Kegiatan</th>
    <th>Catatan</th>
    <th>Aksi</th>
</tr>

<?php
$data = mysqli_query($conn, "SELECT * FROM kegiatan");
while ($d = mysqli_fetch_array($data)) {
?>
<tr>
    <td><?= $d['kegiatan'] ?></td>
    <td><?= $d['status'] ?></td>
    <td><?= $d['penanggung_jawab'] ?></td>
    <td><?= $d['peserta'] ?></td>
    <td><?= $d['tanggal_mulai'] ?></td>
    <td><?= $d['tanggal_selesai'] ?></td>
    <td><?= $d['tempat'] ?></td>
    <td><?= $d['catatan'] ?></td>
    <td>
        <div class="aksi">
            <a href="edit.php?id=<?= $d['id'] ?>" class="button-link">
                <button class="update-btn">Edit</button>
            </a>
            <a href="hapus.php?id=<?= $d['id'] ?>" 
               class="button-link"
               onclick="return confirm('Yakin hapus data?')">
                <button class="delete-btn">Hapus</button>
            </a>
        </div>
    </td>
</tr>
<?php } ?>

</table>

<script>
// Hapus parameter notifikasi dari URL agar hilang setelah refresh
if (window.history.replaceState) {
    const url = new URL(window.location);
    url.searchParams.delete('success');
    url.searchParams.delete('update');
    url.searchParams.delete('delete');
    window.history.replaceState(null, null, url.pathname + url.search);
}
</script>

</body>
</html>
