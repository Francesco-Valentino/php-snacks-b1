<?php
    include_once __DIR__ . "/Indumento.php";

    class Scarpa extends Indumento{
        public $tacco;

        function __construct($_tacco,){
            $this->tacco = $_tacco;
        }
    }
?>