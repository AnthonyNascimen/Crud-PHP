<?php
    include_once "./model/sitemodel.php";
    if(isset($_POST['venderpdt'])){
        header('Location: ./controller/produtocontrol.php');
    }else{
        indexoff();
    }
    function indexoff(){
        $pdt = lista();
        include_once "./view/home.php";
    }
?>