<head>
    <meta charset="utf8">
    <title>NetGames</title>
    <nav class='menu'>
        <ul>
            <li><a>NetGames<a>
            <li><a href="./controller/produtocontrol.php" id ="vender">Vender <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
  <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
</svg></a></li>
        </ul>
    </nav>
    <link rel="stylesheet" href="./view/css/site.css">
</head>
<body style="background:white">
    <br>
    <?php
        if(isset($pdt)){
            foreach($pdt as $c){
                $id = $c['id'];
                $nome = $c['nome'];
                $valor = $c['valor'];
                echo "<div class='comprar'>"."Nome: ".$nome."<br><a href='./controller/comprarpdt.php?id=$id' class='btn-buy'>".$valor."<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
                <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
              </svg></a><a href='./controller/atualizarpdt.php?id=$id' class='btn-edit'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
  <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
</svg></a>"."</div>";
            }
        }
        else{
            echo "não nenhum produto cadastrado.";
        }
    ?>
</body>
<style>
    #vender{
        float:right;
        background:rgb(19, 153, 41);
        height: 37px;
        transition: background .3s;
    }
    #vender:hover{
        float:right;
        background:rgb(72, 212, 95);
    }
    .comprar{
        border-radius: 10px;
        border: 2px solid rgb(165, 165, 165);
        display: inline-block;
        margin: 5px;
        vertical-align: bottom;
        text-align: center;
        height: 130px;
        max-width: 520px;
        min-width: 160px;
        padding: 5px;
        float:center;
        background: rgb(223, 223, 223);
    }
    .btn-buy{
        padding:3px;
        border-radius: 5px;
        border:2px solid dimgray;
        position: relative;
        top:50px;
        color: black;
        text-decoration: none;
        transition: background .1s;
        float:center;
        background:rgb(19, 153, 41);
    }
    .btn-buy:hover{
    background:rgb(72, 212, 95);
    }
    .btn-edit{
        border-radius: 5px;
        border:2px solid dimgray;
        padding: 3px;
        color: black;
        position: relative;
        text-decoration: none;
        transition: background .1s;
        background: cornflowerblue;
        float:center;
        left:10px;
        top:50px;
    }
    .btn-edit:hover{
        background: rgb(163, 194, 252);
    }
</style>