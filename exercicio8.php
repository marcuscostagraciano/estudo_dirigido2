<?php

print "Digite o preço do 1º produto: ";
$num1= (float) fgets(STDIN);

print "Digite o preço do 2º produto: ";
$num2= (float) fgets(STDIN);

print "Digite o preço do 3º segundo: ";
$num3= (float) fgets(STDIN);

if ($num1<$num2 && $num1<$num3) 
    {print "O preço do 1º produto é mais barato\n";}

if ($num2<$num1 && $num2<$num3) 
    {print "O preço do 2º produto é mais barato\n";}

if ($num3<$num1 && $num3<$num2) 
    {print "O preço do 3º produto é mais barato\n";}