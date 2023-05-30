<?php
    function con(){
        $host = 'localhost';
        $user = 'root';
        $pass= '';
        $banco = 'crud';
        $con = new mysqli($host,$user,$pass,$banco);
        return $con;
    }
?>