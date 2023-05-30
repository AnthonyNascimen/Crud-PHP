<?php
    include_once "../model/sitemodel.php";
    if(isset($_POST['adicionarpdt'])){
        add();
        header('Location: ../index.php');
    }
    else{
        indexon();
    }
    function indexon(){
        include_once "../view/addproduto.php";
    }
    function add(){
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        addpdt($nome,$valor);
    }
?>