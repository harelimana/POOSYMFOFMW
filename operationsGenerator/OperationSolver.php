<?php

/**
 * Description of OperationSolver
 *
 * @author axxaroot
 */
/* Créez une seconde classe "OperationSolver" avec une méthode statique "solve" ​
  prenant en paramètre un "tableau d’opérations" sous formes de "chaine de caractère" et dont l’objectif est de
  résoudre les opérations et de renvoyer un "tableau associatif".
  exemple : array(‘operation’ => solution) */

class OperationSolver {

    public static $operations = [];
    public static $results = [];

    public static function solve($operations) {
        self::$operations = array_map(function($equation) {
            eval("\$result = ($equation) + 0;"); 
            return self::$results[$equation] = $result;
        }, $operations);
        return self::$results;
    }

}
