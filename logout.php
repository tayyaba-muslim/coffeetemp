<?php
session_start();

session_unset();

session_destroy();

header('location:http://localhost:82/coffeetemp/login.php');


?>