<form action="POST">
    <input name="num1" placeholder="Numero 1"><br>
    <input name="num2" placeholder="Numero 2"><br>
    <button>Enviar</button>
</form>
<?php
if($_REQUEST){
    $n1 = $_REQUEST['num1'];
   $n2 = $_REQUEST['num2'];
    echo("soma = ".$n1+$n2." subtração = ".$n1-$n2." multiplicação = ".$n1*$n2." divisão = ".$n1/$n2);
} 
 ?>