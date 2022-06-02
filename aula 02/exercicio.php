<form action="exercicio.php/POST">
    <input name="num1" placeholder="Numero 1"><br>
    <input name="num2" placeholder="Numero 2"><br>
    <button name ="somar">Somar</button>
    <button name ="multiplicar">Multiplicar</button>
    <button name ="subtrair">Subitrair</button>
    <button name ="dividir">Dividir</button>
</form>
<?php
if($_REQUEST){
    $n1 = $_REQUEST['num1'];
   $n2 = $_REQUEST['num2'];
   if(isset( $_REQUEST['somar'])){
    echo("soma = ".$n1+$n2);
   }
   if( isset( $_REQUEST['subtrair'])){
    echo("subtração = ".$n1-$n2);
    }
    if( isset( $_REQUEST['multiplicar'])){
        echo("multiplicação = ".$n1*$n2);
    }
    if( isset( $_REQUEST['dividir'])){
        echo("divisão = ".$n1/$n2);
    }
    
} 
 ?>