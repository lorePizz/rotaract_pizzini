<?php
session_start();
session_destroy();
header("Location: ../index.html"); // o chi_siamo.html
exit;
?>
