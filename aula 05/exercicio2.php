<?php
echo"<select name='dia'>";
echo"<option selected> --- selecione o dia --- </option>";
for($x = 1;$x<=31;$x++){
    echo"<option value='{$x}'>'{$x}'</option>";
}
echo"</select>";
echo"<select name='mes'>";
echo"<option selected> --- selecione o mes --- </option>";
for($x = 1;$x<=12;$x++){
    echo match($x){
        1=>"<option value='janeiro'>janeiro</option>",
        2=>"<option value='fevereiro'>fevereiro</option>",
        3=>"<option value='março'>março</option>",
        4=>"<option value='abril'>abril</option>",
        5=>"<option value='maio'>maio</option>",
        6=>"<option value='junho'>junho</option>",
        7=>"<option value='julho'>julho</option>",
        8=>"<option value='agosto'>agosto</option>",
        9=>"<option value='setembro'>setembro</option>",
        10=>"<option value='outubro'>outubro</option>",
        11=>"<option value='novembro'>novembro</option>",
        12=>"<option value='desembro'>desembro</option>",
        default => "mes invalido"
    };
    
}
echo"</select>";
echo"<select name='ano'>";
echo"<option selected> --- selecione o ano --- </option>";
for($x = 2022;$x>=1900;$x--){
    echo"<option value='{$x}'>'{$x}'</option>";
}
echo"</select>";