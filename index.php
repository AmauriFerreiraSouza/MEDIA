<?php
    require 'Calcular.php';//faço a requisição do meu arquivo Calcular.php
    $calc = new Calcular();//instâncio minha Class Calcular()
    //verifico se foi enviado e se não foi vazio os valores
    if (isset($_POST['N1']) && !empty($_POST['N1'])) {
        //armazeno os valores em variáveis
        $n1 = addslashes($_POST['N1']);
        $n2 = addslashes($_POST['N2']);
        //passo os valores enviados para meus metodos SET
        $calc->setNumberOne($n1);
        $calc->setNumberTwo($n2);
        //armazeno dentro de uma variável o retorno do meu calculo 
        $media = $calc->media();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Média</title>
</head>
<body>
    <h2>Média</h2>
    <form method="post">
        PRIMEIRO NÚMERO:</br>
        <input type="text" name="N1" required></br></br>
        SEGUNDO NÚMERO:</br>
        <input type="text" name="N2" required></br></br>
        <!-------------------código php-------------------->
        <?php
        //verifico se os valores estão vazios 
        if (!empty($n1) && !empty($n2)){
          //verifico se os valores são inteiros  
          if (intval($n1) && intval($n2)) {   
            echo "A média entre ".$n1." e ".$n2." é: ".$media;
           }else{
            echo "DIGITE APENAS NÚMEROS!!";
           }
        }
        ?>
        <!------------------------------------------------->
        </br></br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>