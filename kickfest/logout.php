<?php
session_start();
session_destroy();
header('Location:../kickfest/login.php');
?>