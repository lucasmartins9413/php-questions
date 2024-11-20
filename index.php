<?php

echo "<strong>1)Imprima números de 1 a 10 usando for:</strong>";
echo "<br><br>";
for($i = 1; $i <=10; $i++){
    echo $i;
}
echo "<br><br>";
echo "<hr>";

echo "<strong>2) Imprima números de 10 a 1 (decrescente) usando while:</strong>";
echo "<br><br>";

$i = 10;
while ($i >= 1) {
  echo $i;
  $i--;
}

echo "<br><br>";
echo "<hr>";


echo "<strong>3) Imprima apenas números pares de 1 a 20 usando for:</strong>";
echo "<br><br>";

for($i = 1; $i <=20; $i++){
    if($i %2 == 0){
        echo $i;
    }
}
echo "<br><br>";
echo "<hr>";


echo "<strong>4) Imprima apenas números ímpares de 1 a 20 usando while:</strong>";
echo "<br><br>";

$i = 1;
while($i <= 20){
    if($i %2 == 1){
        echo $i;
    }
    $i++;
}
echo "<br><br>";

echo "<strong>5) Calcule a soma de números de 1 a 50 e exiba o resultado:</strong>";
echo "<br><br>"; 

$soma = 0;
for($i = 0; $i <= 50; $i++){
    $soma += $i;
    echo $soma . " + ";
}
echo "<br><br>";
echo "A soma total é:" . $soma;
echo "<br><br>";


echo "<strong>6) Calcule a média de 5 números fornecidos pelo usuário:</strong>";
echo "<br><br>";

$notas = [10, 20, 30, 40, 50];

// function funSomaVetor($notas)     { 
//     $soma = 0;
//     for ($i=0; $i < sizeof($notas); $i++) { 
//         $soma = $soma + $notas[$i]; 
//     } 
//     return $soma; 
//  }

// $resultado = funSomaVetor($notas) / count($notas); 
// echo $resultado;

$notas = [10, 20, 30, 40, 50];
foreach($notas as $nota){
    echo $nota . " + ";
}
echo "<br><br>";
$resultado = array_sum($notas) / count($notas);
echo  "A média das notas é:" . $resultado;

echo "<br><br>";


echo "<strong>7) Crie uma contagem regressiva de 10 a 0 e exiba Lançar quando chegar a zero:</strong>";
echo "<br><br>";

for($contador = 10; $contador >= 0; $contador--){
    echo $contador . "<br>";
}

echo "Lançar já";
echo "<br><br>";

echo "<strong>8) Calcule o fatorial de um número (ex.: fatorial de 5 é 5 * 4 * 3 * 2 * 1):</strong>";

$i = 10;
$calc = 1;
while($i > 1){
    $calc *= $i;
    $i--;
}
echo "<br><br>";
echo "O fatorial de ". $i ." é: " . $calc;

echo "<br><br>";
echo "<strong>9) Verifique se um número é primo (divisível apenas por 1 e ele mesmo):</strong>";
echo "<br><br>";


function isPrime($number) {
    if ($number <= 1) return false;
    if ($number == 2) return true;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; 
        }
    }
    return true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['valor_numero'])) {
    $number = $_POST['valor_numero'];
    if (is_numeric($number) && intval($number) == $number) {
        $number = intval($number);
        if (isPrime($number)) {
            echo "$number é um número primo.";
        } else {
            echo "$number não é um número primo.";
        }
    } else {
        echo "Por favor, insira um número inteiro válido.";
    }
}
?>

<form action="" method="POST">
    <input type="text" name="valor_numero" placeholder="Digite o número">
    <input type="submit" value="verificar">
</form>
<?php
echo "<strong>10) Calcule a soma dos números pares de 1 a 100.</strong>";
echo "<br><br>";
$i = 1;
$numbers = [];
while($i <= 100){
    if($i %2 == 0){
        $numbers[] = $i;
    }
    $i++;

}
$result = array_sum($numbers);
echo "A soma dos números pares de 1 a 100 é: " . $result;
echo "<br><br>";
echo "<strong>11) Calcule a soma dos números ímpares de 1 a 100.</strong>";
echo "<br><br>";
$i = 1;
$numbersImpar = [];
while($i <= 100){
    if($i %2 == 1){
        $numbersImpar[] = $i;
    }
    $i++;

}
$resultImpar = array_sum($numbersImpar);
echo "A soma dos números ímpares de 1 a 100 é: " . $resultImpar;
echo "<br><br>";

echo "<strong>12) Imprima os múltiplos de 3 de 1 a 50:</strong>";
echo "<br><br>";

for($i = 0; $i <= 50; $i++){
    if($i %3 == 0){
        echo $i . ", ";
    }
}


echo "<br><br>";
echo "<strong>13) Encontre o maior número em um array de números:</strong>";
echo "<br><br>";
$arrayNumbers = [1,2,3,4,5,6,7,8,9,10,850];
$maxValue = max($arrayNumbers);
echo "O maior número é: " . $maxValue;
echo "<br><br>";
foreach($arrayNumbers as $arrayNumber){
    echo $arrayNumber . ", ";
}

echo "<br><br>";
echo "<strong>14) Encontre o menor número em um array de números:</strong>";
echo "<br><br>";
$arrayNumbersMin = [15,22,23,234,35,46,57,238,92,120,850];
$maxValue = min($arrayNumbersMin);
echo "O menor número é: " . $maxValue;
echo "<br><br>";
foreach($arrayNumbersMin as $arrayNumber){
    echo $arrayNumber . ", ";
}

echo "<br><br>";
echo "<strong>15) Calcule a média de um array de números usando foreach:</strong>";
echo "<br><br>";

$mediasArray = [10,20,20,30,40,45,60,240,90,120,850];

echo "Números do array: ";
foreach ($mediasArray as $index => $mediaArray) {
    echo $mediaArray;
    if ($index < count($mediasArray) - 1) {
        echo " + ";
    }
}

$resultado = array_sum($mediasArray) / count($mediasArray);
echo "<br><br>";
echo "Média: " . $resultado;
echo "<br><br>";
echo "Média: " . number_format($resultado, 2); 
echo "<br><br>";
echo "<br><br>";
echo "<strong>16) Conte quantos elementos de um array são positivos e quantos são negativos:</strong>";
echo "<br><br>";

$arrayPlus = [-1, -3, -5, -8, 10, 2, 9, -5, 10];
sort($arrayPlus);
print_r($arrayPlus);
echo "<br><br>";

$positivos = count(array_filter($arrayPlus, function($num) {
    return $num > 0;
}));

$negativos = count(array_filter($arrayPlus, function($num) {
    return $num < 0;
}));
echo "Números positivos: $positivos<br>";
echo "Números negativos: $negativos<br>";

echo "<br><br>";


echo "<strong>17) Verifique se um número existe em um array: </strong>";
echo "<br><br>";
$numbers = [-1, -3, -5, -8, 10, 2, 9, -5, 10];

if (in_array("10", $numbers)) { 
	echo "Tem o número 10";
} else  { 
    echo "Não tem o número 35";
}
echo "<br><br>";
echo "<strong>18) Inverta os elementos de um array e exiba o resultado.</strong>";
