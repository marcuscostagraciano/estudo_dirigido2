<?php

print "Digite o primeiro número: ";
$numero1= (float) fgets(STDIN);

print "Digite o segundo número: ";
$numero2= (float) fgets(STDIN);

if ($numero1>$numero2)  
    {print "O número 1 é maior\n";
     $ummenosodois= $numero1-$numero2;
    print "O número 1 é maior que o número 2 por: $ummenosodois\n";}

if ($numero1<$numero2)  
    {print "O número 2 é maior\n";
     $doismenosoum= $numero2-$numero1;
     print "O número 2 é maior que o número 1 por: $doismenosoum\n";}

if ($numero1==$numero2)  
        {print "Ambos são iguais";}
