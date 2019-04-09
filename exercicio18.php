<?php
//Quantidade de pares e impares em 10 números

$numeropar=0;
$numeroimpar=0;
$contagemvezes=1;

do {print "Digite um número: ";
    $num = (float) fgets(STDIN);
    
    if ($num%2==0)
    {$numeropar++;}

    if ($num%2!=0)
    {$numeroimpar++;}  

    $contagemvezes++;}  while($contagemvezes<=10);

    if ($numeroimpar!=1 and $numeropar!=1){
    print "Quantidade de números impares: $numeroimpar\nQuantidade de números pares: $numeropar";}

    elseif ($numeroimpar==1 and $numeropar!=1){
    print "Quantidade de número impar: $numeroimpar\nQuantidade de números pares: $numeropar";}

    elseif ($numeroimpar=!1 and $numeropar==1){
    print "Quantidade de números impares: $numeroimpar\nQuantidade de número par: $numeropar";}

    elseif ($numeroimpar==1 and $numeropar==1){
    print "Quantidade de número impar: $numeroimpar\nQuantidade de número par: $numeropar";};
