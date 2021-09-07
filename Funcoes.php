<?php

    class Funcoes {

        function verdade () {
            return true;
        }

        function falsidade () {
            return false;
        }
        
        function arraythor () {

            $return = array();

            for($i = 0; $i < rand(1, 15); $i++) {
                array_push($return, rand(1, 15));
            }

            return $return;
        }

        function contador () {
            return rand(1, 999);
        }

        function vazio () {
            return [];
        }

        function frase () {
            return "Algo mais coisa";
        }
    }

?>