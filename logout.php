<?php
include "config/koneksi.php";
session_destroy();
echo "<script>document.location.href='index.php'</script>";
?>