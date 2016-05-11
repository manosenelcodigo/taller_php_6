<?php
// arreglo [fila][columna]
$arreglo[0][0]="Chile";
$arreglo[0][1]="Perú";
$arreglo[0][2]="Venezuela";
$arreglo[0][3]="Colombia";

$arreglo[1][0]="Bolivia";
$arreglo[1][1]="Argentina";
$arreglo[1][2]="México";
$arreglo[1][3]="Costa Rica";

$arreglo[2][0]="Nicaragua";
$arreglo[2][1]="Paraguay";
$arreglo[2][2]="Ecuador";
$arreglo[2][3]="Brasil";

//echo sizeof($arreglo);
//echo $arreglo[2][0];
for($i=0;$i<sizeof($arreglo);$i++)//recorro las filas
{
    for($j=0;$j<sizeof($arreglo[$i]);$j++ )//recorro las columnas
    {
        echo "fila : ".$i." columna:".$j."-";
        echo $arreglo[$i][$j];
        echo "<br />";
    }
}



