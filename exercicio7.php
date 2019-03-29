<?php

print "Digite o 1º número: ";
$num1= (float) fgets(STDIN);

print "Digite o 2º número: ";
$num2= (float) fgets(STDIN);

print "Digite o 3º número: ";
$num3= (float) fgets(STDIN);

//Para determinar o maior
if ($num1>$num2 && $num1>$num3) 
    {print "O 1º número é o maior\n";}

if ($num2>$num1 && $num2>$num3) 
    {print "O 2º número é o maior\n";}

if ($num3>$num1 && $num3>$num2) 
    {print "O 3º número é o maior\n";}

//Para determinar o menor
if ($num1<$num2 && $num1<$num3) 
    {print "O 1º número é o menor\n";}

if ($num2<$num1 && $num2<$num3) 
    {print "O 2º número é o menor\n";}

if ($num3<$num1 && $num3<$num2) 
    {print "O 3º número é o menor\n";}


//Se houverem números iguais
if ($num1==$num2 && $num1==$num3) 
    {print "Ambos 3 números são iguais";}

if ((float)($num1 && $num2 && $num3))
        {if ($num1==$num2) 
            {print "O 1º e 2º número são iguais";}
            
        if ($num2==$num3) 
            {print "O 2º e 3º número são iguais";}
            
        if ($num3==$num1) 
            {print "O 1º e 3º número são iguais";}}