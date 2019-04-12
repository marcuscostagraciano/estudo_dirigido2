<?php

print "Digite o 1º número: ";
$numero1= (float) fgets(STDIN);

print "Digite o 2º número: ";
$numero2= (float) fgets(STDIN);

print "Digite o 3º número: ";
$numero3= (float) fgets(STDIN);

$numerosordem= array("$numero1","$numero2","$numero3");
rsort($numerosordem);
count($numerosordem);

for ($i=0;$i < count($numerosordem); $i++)
    {print $numerosordem[ $i ]."\n";}
