<nav class="menu">
    <ul>
        <li><a id="none">Atualizar Produto</a></li>
        <li></li>
    </ul>
</nav>
<head>
    <link rel="stylesheet" href="../view/css/site.css">
</head>
<form action="" method="post">
    <input type="hidden" name='id' value='<?=$con['id']?>' required>
    <label>Nome:</label>
    <input type="text" name="nome" value="<?=$con['nome']?>" id="input-nom"><br>
    <label>Valor:</label>
    <input type="text" name="valor" value="<?=$con['valor']?>" id="input-val"><br>
    <button type="submit" name="comprar" value="<?=$con['id']?>">Atualizar</button>
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
    #input-nom{
        padding:3px;
        position: relative;
    }
    #input-val{
        padding:3px;
        position: relative;
        left:0.4pc;
    }
    button{
        position: relative;
        background:green;
        height:20px;
        width:130px;
        top:135px;
        left:250px;
        border:1px solid dimgray;
        border-radius:5px;
        transition: background .3s;
    }
    #n{
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