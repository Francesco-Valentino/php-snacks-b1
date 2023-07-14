<?php
    include_once __DIR__ . "/Indumento.php";

    class Cappello extends Indumento{
        public $visiera;

        function __construct($_visiera,){
            $this->visiera = $_visiera;
        }
    }
?>