<!--11. logout.php – End Session-->

<!-- logout.php -->
<?php
session_start();
session_destroy();
header("Location: index.php");
?>
