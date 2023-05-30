<?php
    include_once "../model/sitemodel.php";
    if(isset($_POST['comprar'])){
        $id = $_POST['comprar'];
        comprar($id);
        header('Location: ../index.php');
    }
    elseif(isset($_POST['naocomprar'])){
        header('Location: ../index.php');
    }
    elseif(isset($_GET['id'])){
        $con = procurarpdt($_GET['id']);
        include_once "../view/comprar.php";
    }
?>