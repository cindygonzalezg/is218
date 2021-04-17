<?php
echo "welcome!";
include 'controllers/controller.php';
$controller = new Controller();
$controller->invoke();
?>