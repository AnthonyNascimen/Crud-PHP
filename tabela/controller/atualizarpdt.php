<?php
    include_once "../model/sitemodel.php";
    if(isset($_POST['comprar'])){
        $id = $_POST['comprar'];
        editpdt($id);
        header('Location: ../index.php');
    }
    elseif(isset($_GET['id'])){
        $con = procurarpdt($_GET['id']);
        include_once "../view/atualizar.php";
    }
    function editpdt(){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        atualizarpdt($id,$nome,$valor);
    }
?>