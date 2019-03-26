<?php

print "Digite o número: ";
$numero= (float) fgets(STDIN);

if ($numero<0)
    {print "O número é negativo\n";}

if ($numero>0)
    {print "O número é positivo\n";}

if ($numero==0)
    {print "O número é neutro\n";}
