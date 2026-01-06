<?php
include "koneksi.php";

mysqli_query($conn, "INSERT INTO kegiatan VALUES(
    '',
    '$_POST[kegiatan]',
    '$_POST[status]',
    '$_POST[penanggung_jawab]',
    '$_POST[peserta]',
    '$_POST[tanggal_mulai]',
    '$_POST[tanggal_selesai]',
    '$_POST[tempat]',
    '$_POST[catatan]'
)");

// redirect + notif success
header("Location: index.php?success=1");
exit;
