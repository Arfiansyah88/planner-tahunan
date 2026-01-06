<?php
include "koneksi.php";
mysqli_query($conn, "DELETE FROM kegiatan WHERE id='$_GET[id]'");
header("Location: index.php?delete=1");
exit;

