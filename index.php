<?php

require "config/config.php";
require "controllers/FormController.php";

$controller = new FormController();
$controller->handleRequest();