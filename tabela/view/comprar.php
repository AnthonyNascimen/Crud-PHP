<nav class="menu">
    <ul>
        <li><a id="none">Menu de Compra</a></li>
        <li></li>
    </ul>
</nav>
<head>
    <link rel="stylesheet" href="../view/css/site.css">
</head>
<form action="" method="post">
    <input type="hidden" name='id' value='<?=$con['id']?>' required>
    <label>Nome: <?=$con['nome']?></label><br>
    <label>Valor: <?=$con['valor']?></label><br>
    <button type="submit" name="comprar" value="<?=$con['id']?>">Confirmar compra</button>
    <button type="submit" name="naocomprar" id="n">Não Confirmar</button>
</form>
<style>
    form{
        background-color: rgb(185, 185, 185);
        font-size:20px;
        position: relative;
        top:50px;
        border: 2px solid black;
        height: 220px;
        max-width:600px;
    }
    label{
        padding:3px;
        position: relative;
    }
    button{
        position: relative;
        background:green;
        height:20px;
        width:130px;
        top:110px;
        right:10px;
        float:right;
        border:1px solid dimgray;
        border-radius:5px;
        transition: background .3s;
    }
    #n{
        position: relative;
        left:-16px;
        background:red;
        transition: background .3s;
    }
    #n:hover{
        background-color: rgb(255, 147, 147);
    }
    button:hover{
        background-color: rgb(193, 245, 202);
        cursor:pointer;
    }
</style>