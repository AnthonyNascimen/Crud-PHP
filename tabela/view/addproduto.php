<nav class="menu">
    <ul>
        <li><a>Menu de Venda</a></li>
        <li><a href="../index.php" id="voltar">Voltar</a></li>
    </ul>
</nav>
<head>
    <link rel="stylesheet" href="../view/css/site.css">
</head>
<form action="" method="post">
    <label>Nome:</label>
    <input type="text" name="nome" id="inputpdt0"><br>
    <label>Valor:</label>
    <input type="text" name="valor" id="inputpdt1" placeholder="0,00 R$"><br>
    <button type="submit" name="adicionarpdt">Adicionar Produto</button>
</form>
<style>
    form{
        background-color: rgb(185, 185, 185);
        font-size:20px;
        position: relative;
        top:50px;
        border: 2px solid black;
        height: 220px;
        width: 400px;
    }
    input{
        padding:3px;
        border:2px solid dimgray;
        border-radius:20px;
    }
    #inputpdt1{
        position: relative;
        left:8px;
    }
    label{
        padding:3px;
        position: relative;
    }
    button{
        position: relative;
        background:green;
        top:135px;
        left:280px;
        border:2px solid dimgray;
        border-radius:5px;
        transition: background .3s;
    }
    button:hover{
        background-color: rgb(193, 245, 202);
        cursor:pointer;
    }
    #voltar{
        height:37px;
        float: right;
        background-color:rgb(153, 20, 20);
        transition: background .3s;
    }
    #voltar:hover{
        background-color: rgb(255, 147, 147);
    }
</style>