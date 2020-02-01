<?php 
// mengaktifkan session
session_start();

// menghapus semua session
session_destroy();

// mengalihkan halaman sambil mengirim pesan logout
echo "<META HTTP-EQUIV='Refresh' Content='0; URL=login.php'>";
?>