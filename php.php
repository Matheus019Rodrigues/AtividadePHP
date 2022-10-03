<?php
echo "A- <br>";
function Tabuada ($tabuada, $valor)
{
    $contador = 0;

    while($contador <= $valor)
    {
        $resultado = $tabuada * $contador;
        echo ($tabuada. " x ". $contador. " = ". $resultado). "<br>";
        $contador++;
    }
}

Tabuada(2, 10);

echo "<hr>";

echo "B- <br>";
$input = readline('input: ');

function reverte($input)
{
    $array_input = str_split($input);
    $input_reverte = array_reverse($array_input);
    eccho implode ('', $input_reverte);
}

reverte($input);

echo "<hr>";

echo "C- <br>";
$e = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 34];
$y = sizeof($e);
$r = 0;
for ($t = 0; $t < $y; $t++) {
    if ($e[$t] > $r) {
        $r = $e[$t];
    }
}
echo $r;

echo "<hr>";

echo "D- <br>";
function cpf($cpf)
{
    $u = strlen($cpf);
    if ($u >= 11) {
        $o = mb_substr($cpf, 0, 3) . "." .
            mb_substr($cpf, 3, 3) . "." .
            mb_substr($cpf, 6, 3) . "-" .
            mb_substr($cpf, 9, 2);
        echo $o;
    } else {
        $st = str_pad($cpf, 11, "0", STR_PAD_RIGHT) . "<br>";
        $trq = mb_substr($st, 0, 3) . "." .
            mb_substr($st, 3, 3) . "." .
            mb_substr($st, 6, 3) . "-" .
            mb_substr($st, 9, 2);
        echo $trq;
    }
}
cpf(12345678911);

echo "<hr>";

echo "E- <br>";
function celsiu($f)
{
    $c = ($f - 32) / 18;
    $num = number_format($c, 1);
    echo "Em Fahrenheit é de $f ºf e em Celsius é de $num ºC<br>";
}
celsiu(90);
celsiu(77);
celsiu(52);
celsiu(12);

echo "<hr>";

echo "F- <br>";
function buscaTexto($texto, $busca)
{
    $arry = [];
    $arr = array_push($arry, $busca);
    foreach ($arry as $ai) {
        $alo = "<span style='color: #f00;'>$ai</span>";
        $pos = str_replace($ai, $alo, $texto);
        echo "$pos";
    }
}
buscaTexto("O mundo precisa de mais dinheiro", "mundo");

echo "<hr>";

echo "G- <br>";
$al = [1, 3, 4, 5, 6, 7, 8, 9, 0, 3, 2, 1, 2];
$awl = sizeof($al);
$als = 0;
for ($e = 0; $e < $awl; $e++) {
    if (is_int($al[$e]) == true) {
        $als += $al[$e];
    }
}
echo "Soma: " . $als . "<br>, apenas com os numeros inteiros do array.";
echo "Soma: " . array_sum($al) . "<br>, soma com todos os numero do array.";

?>