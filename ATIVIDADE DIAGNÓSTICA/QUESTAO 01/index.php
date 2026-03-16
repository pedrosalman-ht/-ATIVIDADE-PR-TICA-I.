<?php 

echo "Digite o nome do aluno:\n";
$nome = trim(fgets(STDIN));

$nota = [];

for ($i = 0; $i < 3; $i++) {
    echo "Digite a nota ".($i+1).":\n";
    $nota[$i] = trim(fgets(STDIN));
}

$media = ($nota[0] + $nota[1] + $nota[2]) / 3;

echo "Nome do aluno: $nome\n";
echo "A media das notas e: $media\n";

if ($media >= 7) {
    echo "Aprovado\n";
} elseif ($media >= 5) {
    echo "Recuperacao\n";
} else {
    echo "Reprovado\n";
}