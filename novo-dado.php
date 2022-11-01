<?php

include "conexao.php";

$sql = 'INSERT into Cliente1 (CPF, foto, Nome, Numero_Quarto1, N°_de_pessoas) 
        values (
            "'.$_POST['CPF'].'",
            "'.$_POST['foto'].'",
            "'.$_POST['Nome'].'",
            "'.$_POST['Numero_Quarto1'].'",
            "'.$_POST['N°_de_pessoass'].'",

        );';

$resultado = $conector->query($sql);
if($resultado === TRUE){
    echo "<script language='javascript' type='text/javascript'>alert('Registro inserido!');
    window.location.href = 'index';</script>";
} else {
    echo "<script language='javascript' type='text/javascript'>alert('Falha na inserção!');
    window.location.href = 'index';</script>";
}


$conector->close();

?>
