<?php
$x =2022;
echo"<select name='select'>";
echo"<option selected> --- selecione o ano --- </option>";
while($x>=1900){
    echo"<option value='{$x}'>'{$x}'</option>";
    $x--;
}
echo"</select>";