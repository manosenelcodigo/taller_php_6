<?php
//creación de arreglo al vuelvo
//$arreglo= array(12,"papá",45,"perro",true,87,45.9,null,'m');
$arreglos[]=12;//posición 0
$arreglos[]="papá";//posición 1
$arreglos[]=45;
$arreglos[]="perro";
$arreglos[]=true;

echo $arreglos[3];
exit;

foreach($arreglos as $key => $arreglo)
{
    echo $key."-";
    echo $arreglo;
    echo "<br />";
}

