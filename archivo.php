<?php
//un arreglo o un array: es una variable que me permite almacenar más de un dato

$variable="Chile";

// arreglo[posición - índice ]

// chile perú venezuela colombia méxico 
//   0     1      2         3      4 

// es un arreglo de un largo de 5
//ésto es un arreglo unidimensional
// un arreglo puede almacenar distintos tipos de dato
$arreglo= array(12,"papá",45,"perro",true,87,45.9,null,'m');
$largo= sizeof($arreglo);//count();


//echo $arreglo[9];
//iteración
for($i=0;$i<sizeof($arreglo);$i++)
{
    echo $arreglo[$i];
    echo "<br />";
}
echo "<hr />";
$datos= array(12,"papá",45,"perro",true,87,45.9,null,'m');
foreach($datos as $key => $dato)
{
    echo $key."-";
    echo $dato;
    echo "<br />";
}




















