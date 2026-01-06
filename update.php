<?php
include "koneksi.php";

mysqli_query($conn, "UPDATE kegiatan SET
    kegiatan='$_POST[kegiatan]',
    status='$_POST[status]',
    penanggung_jawab='$_POST[penanggung_jawab]',
    peserta='$_POST[peserta]',
    tanggal_mulai='$_POST[tanggal_mulai]',
    tanggal_selesai='$_POST[tanggal_selesai]',
    tempat='$_POST[tempat]',
    catatan='$_POST[catatan]'
    WHERE id='$_POST[id]'
");

header("Location: index.php?update=1");
exit;