<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here         
            if(array_key_exists("NomeUsuario", $_GET)){
                $nomelido = htmlspecialchars($_GET["NomeUsuario"]);
                echo "O nome recebido foi " . $nomelido . "<br/>";
            }                    
        ?>
        <!-- /////// Vamos fazer um form Simples -->        
        <form name="Usuario" action="index.php">            
            <input type="text" name="NomeUsuario" value="Joao" size="20" />            
            <input type="submit" value="Enviar" name="enviar" />
        </form>
        
    </body>
</html>
