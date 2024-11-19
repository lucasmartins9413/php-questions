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


