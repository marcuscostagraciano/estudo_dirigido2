<?php

print "Digite M ou F: ";
$sexo= (string) fgets(STDIN);

$masc= 'M';
$femi= 'F';

if ((strcasecmp($sexo, $masc))==2)
  {print "Sexo masculino";
    exit;}

if ((strcasecmp($sexo, $femi))!=-7 and (strcasecmp($sexo, $femi))==2)
  {print "Sexo feminino";}

else  {print "Sexo inválido";}
