<?php 
                include "conexao.php";
                $sql=["SELECT * from Cliente1"];
                $resultadoss = $conector->query($sql);
                $num_resultadoss = $resultadoss->num_rows;
                if($num_resultadoss <= 0){
                   echo "Nenhum registro encontrado!";
                } else {
                    for($j=0;$j<$num_resultadoss;$j++){
                       $resultadoss->data_seek($j);
                       $dados = $resultadoss->fetch_assoc();
                        
?>

<DOCTYPE html>
<html>
    <!--usado para ver as reservas já feitas-->
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body class="cor">
        <header class="c">
                
                <ul class="estilo2">

                    <li><b><a class="textodomenu2" href="index.html">Home</a></b></li>
                    <li><b><a class="textodomenu2" href="Quartos.html">Quartos</a></b></li>
                    <li><b><a class="textodomenu2" href="Contatos.html">Contatos</a></b></li>
                    <li><b><a class="textodomenu2" href="Sobre Nós.html">Sobre Nós</a></b></li>
                    <li><b><a class="textodomenu2" href="Reservas.php">Reservas</a></b></li>

                </ul>
                <h1 class="home">
                    Reservas
                </h1>
        </header>
        <main>
        <center>
           <p><h1><b>Cadastre-se</b></h1></p>
        <form method="POST" action="novo-dado.php" class="form">
            <div  >
            <p><h2>Dados de login</h2></p>
            <label for="CPF">CPF</label><br>
            <input type="number" name="CPF" id="CPF"><br>
            <label for="foto">foto</label><br>
            <input type="file" name="foto" id="foto"><br>
            <label for="Nome">Nome</label><br>
            <input type="text" name="Nome" id="Nome"><br>
            <label for="Numero do Quarto">Numero do Quarto</label><br>
            <input type="number" name="Numero_Quarto1" id="Numero_Quarto1"><br>
            <label for="N°_de_pessoass">Numero de Pessoas</label><br>
            <input type="number" name="N°_de_pessoas" id="N°_de_pessoas"><br>
            <p><input type="submit" name="Enter" value="Enter"><br></p>
            </div>
           
        </center>
        </form>
        <center><h1>Seus Dados</h1></center>
        <?php 
 
                        echo '<p> CPF'. $dados['CPF']. '</p>';
                        echo '<p> foto'. $dados['foto']. '</p>';
                        echo '<p> Nome'. $dados['Nome']. '</p>';
                        echo '<p> Numero do Quarto'. $dados['Numero_Quarto1']. '</p>';
                        echo '<p> Numero de Pessoas'. $dados['N°_de_pessoas']. '</p>';
                        echo '<br.'

        ?> 
        </main>
        <footer>
            <div>
                <ul class="final">
                    <li><a class="textodomenu" href="index.html">home</a></li>
                    <li><a class="textodomenu" href="Quartos.html">Quartos</a></li>
                    <li><a class="textodomenu" href="Contatos.html">Contatos</a></li>
                    <li><a class="textodomenu" href="Sobre Nós.html">Sobre Nós</a></li>
                    <li><a class="textodomenu" href="Reservas.php">Reservas</a></li>
                </ul>
            <div class="ali">
                2020-2021 Todos os direitos reservados
            </div>

        </footer>
        <?php
                        }
                    }

                    $conector->close();
        ?>
    </body>
</html>