<?php
require_once "vendor/autoload.php";

use \Aluno\Composer\Search;

$busca = new Search;


$resultado = $busca->getAddressFromZipcode('55750000');

print_r($resultado);