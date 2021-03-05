<?php

$pagina = $_POST['pagina'];
$categoria = $_POST['categoria'];
$tipo = $_POST['tipo'];

echo "A página solicitada foi: " .$pagina."<br/>";
echo "A categoria solicitada foi: " .$categoria."<br/>";
echo "O tipo solicitado foi: " .$tipo."<br/>";


$array = array(
    "cidade" =>"Macapá",
    "estado" =>"Amapá",
    "habitantes"=>100000,
    "mcdonald"=>false
);
$array["habitantes"]=512902;



?>

<form method = "post" >

 pagina: <input type = 'text' name = 'pagina'><br/>
 categoria: <input type = 'text' name = 'categoria'><br/>
 tipo: <input type = 'text' name = 'tipo'><br/>
 <input type = 'submit' name = 'botao' value = "Enviar">



</form>
