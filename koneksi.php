<?php
$conn = mysqli_connect("localhost", "root", "", "planner_db");
if (!$conn) {
    die("Koneksi gagal");
}
