<?php

print "Digite a nota 1: ";
$nota1= (float) fgets(STDIN);

print "Digite a nota 2: ";
$nota2= (float) fgets(STDIN);

print "Digite a média necessária: ";
$medianecessaria= (float) fgets(STDIN);

$media = ($nota1+$nota2)/2;
$media= round($media, 2);
$notanecessaria= $medianecessaria-$media;

if ($media>=$medianecessaria && $media!=10)
    {print "Aluno aprovado(a) - Média: $media; Média necessária: $medianecessaria";}

if ($media<$medianecessaria)
    {print "Aluno(a) reprovado(a) - Média: $media; Média necessária: $medianecessaria; Precisando de: $notanecessaria pontos para ser aprovado(a)";}

if ($media==10)
    {print "Aluno(a) aprovado(a) com distinção - Média: $media; Média necessária: $medianecessaria";}