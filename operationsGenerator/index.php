<?php
require_once(dirname(__FILE__) . '/OperationsGenerator.php');
require_once(dirname(__FILE__) . '/OperationSolver.php');

$opGenerator = new OperationsGenerator();
$opGenerator->generateOperations(12);
$generatedOparations = $opGenerator->getOperations();

foreach($operations as $op){
    echo $op . "\n";
}
