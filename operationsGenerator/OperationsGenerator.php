<?php

/**
 * Description of OperationsGenerator
 *
 * @author axxaroot
 */
const OPERATIONS = 12;

class OperationsGenerator {

    private $operators = ['+', '-', '/', '*'];
    private $operator;
    private $firstOperand;
    private $secondOperand;
    private $operations = array();

    private function getOperation() {
        $this->firstOperand = rand(1, 100);
        $this->secondOperand = rand(1, 100);
        $this->operator = array_rand($this->operators, 1);
        $this->result = $this->firstOperand . ' ' . $this->operator . ' ' . $this->secondOperand;
        return $this->result;
    }

    private function generateOperations($nombre) {
        if (is_integer($nombre)) {
            for ($i = 0; $i <= $nombre; $i++) {
                $this->operations[$i] = $this->getOperation();
            }
        } else {
            die('unittended variable OPERATIONS when generating operation ...');
        }
    }

    private function getOperations() {
        return $this->operations;
    }

}
