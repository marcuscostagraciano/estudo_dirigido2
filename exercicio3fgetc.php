<?php

print "Digite M ou F: ";
$sexo = fgetc(STDIN);

if ($sexo=="M" or $sexo=="m")
    {print "Sexo Masculino";}

elseif ($sexo=="F" or $sexo=="f")
    {print "Sexo Feminino";}

elseif ($sexo!="M" or $sexo!="m" or $sexo!="F" or $sexo!="f")
    {print "Sexo inválido";}
