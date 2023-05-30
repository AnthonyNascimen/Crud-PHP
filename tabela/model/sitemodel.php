<?php
    include_once "bancodados.php";
    function lista(){
        $con = con();
        $sql = "SELECT * FROM loja";
        $res = $con->query($sql);
        $dados = Array();
        while($d = $res->fetch_assoc()){
            $dados[] = $d;
        }
        return $dados;
    }
    function addpdt($nome,$valor){
        $con = con();
        if(empty($valor)){
            $valor= '0,00 R$';
        }
        $sql = "INSERT INTO loja (nome,valor) VALUES('$nome','$valor')";
        $con->query($sql);
    }
    function procurarpdt($id){
        $con = con();
        $sql = "SELECT * FROM loja WHERE id='$id'";
        $res = $con->query($sql);
        $dados = Array();
        while($d = $res->fetch_assoc()){
            $dados[] = $d;
        }
        return $dados[0];
    }
    function comprar($id){
        $con = con();
        $sql = "DELETE FROM loja WHERE id='$id'";
        $con->query($sql);
    }
    function atualizarpdt($id, $nome, $valor){
        $con = con();
        $sql = "UPDATE loja SET nome='$nome',valor='$valor' WHERE id='$id'";
        $con->query($sql);
    }
?>