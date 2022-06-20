<?php
header("Application : Belajar PHP WEB");
header("Autor : Iqbal Maulana Menggala");

$client = $_SERVER['HTTP_CLIENT_NAME'];

echo "Hello $client";
