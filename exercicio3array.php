<?php

print "Digite M ou F: ";
$sexo= (string) fgets(STDIN);

$sexos= array('M','F');

if (strcasecmp($sexo,$sexos[0]) ==2 and strcasecmp($sexo,$sexos[1]) ==7)
    {print "Sexo masculino";}

if (strcasecmp($sexo,$sexos[1]) ==2 and strcasecmp($sexo,$sexos[0]) ==-7)
    {print "Sexo feminino";}

if (strcasecmp($sexo,$sexos[1]) !=2 and strcasecmp($sexo,$sexos[0]) !=-7 and strcasecmp($sexo,$sexos[1]) !=7 and strcasecmp($sexo,$sexos[0]) !=2)
    {print "Sexo inválido";}
