<?php

//Sequência de Fibonacci
//Fórmula== Fn= Fn-1+Fn-2

$fibonacci=-1;

$dez=0;

while ($dez<6)
    {print " $fibonacci";
        
        $fibonacci= ($fibonacci-1)+($fibonacci-2);
    $dez++;}