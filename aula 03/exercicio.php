
<?php 
   //$bf="";
    echo "<table id='tabela' name='tabela'><head><tr><th> nome</th><th>numero</th><tr></head> ";
    if($_REQUEST){
        $bf = $_REQUEST['bf'];
        $bf = str_replace("{", "", $bf);
        $bf = str_replace("}", "", $bf);
        if(!empty($bf)){
        $bfa = explode(',',$bf);
        $bfa = array_filter($bfa);
        $i=0;
        while(true){
            echo "<tr><td>{$bfa[$i]}</td>";
            $i++;
            echo"<td>{$bfa[$i]}</td></tr>";
            $i++;
            if($i>=count($bfa)){
                break;
            }
        }
    }
        echo "<tr><td>{$_REQUEST['nome']}</td><td>{$_REQUEST['num']}</td></tr></table>";
        
        $bf.="{$_REQUEST['nome']},{$_REQUEST['num']},";
    }
    if(!isset($bf)){
        $bf='';
    }
    
   
 ?>
 <form action="exercicio.php/POST">
    <input name="nome" placeholder="Nome"><br>
    <input name="num" placeholder="Numero"><br>
    <input type="hidden" value = "{<?echo $bf;?>}" name="bf">
    <button name>Enviar</button>
</form>