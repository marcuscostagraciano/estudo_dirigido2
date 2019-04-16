<?php

print "Número de números para comparação: ";
$num= (float) fgets(STDIN);
print "\n";

$vezes=1;
$i=0;

while ($vezes<=$num)
    {print "Digite um número: ";
    $numero= (float) fgets(STDIN);

   if ($num==1){
       $numeros= array("$numero");}
    
    elseif($num>1){
        $numeros[$vezes]= $numero;
    }
$vezes++;}

rsort($numeros);

if (count($numeros)==1)
    {print $numeros[0];}

elseif (count($numeros)!=1)

                $vezvariavel=0;
                while ($i < count($numeros))
                { print "\n".$numeros["$vezvariavel"];
                  $vezvariavel++;
                  $i++;}

print "\n";
