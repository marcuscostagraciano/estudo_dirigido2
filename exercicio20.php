<?php

print "Você deseja, imprimir em: ";
print "\n1 - Em sequência\n2 - Individual: ";
$sequenciaouindividual= (int) fgets(STDIN);


if ($sequenciaouindividual==1)
 {  print "\n";
    for ($h=0; $h<8; $h++) //Triângulo aumenta
    { for($l=-1; $l<$h; $l++)
        {print "* ";}
    print "\n";}

print "\n";

 for ($h=0; $h<8; $h++) //Triângulo diminui
    { for ($l=8; $l>$h; $l--)
        {print "* ";}
    print "\n";}

print "\n";

$n=8;
$m=8;

 for ($h=0; $h<$n; $h++) //Quadrado
 { for($l=1; $l<$m; $l++)
     {print "* ";}
 print "\n";}}

if ($sequenciaouindividual==2)
    {print "\nDeseja imprimir um: \n1 - Triângulo aumenta\n2 - Triângulo diminui\n3 - Quadrado: ";
     $trianguloouquadrado=(int) fgets(STDIN);
    
        if ($trianguloouquadrado==1)
            {print "\n";
                for ($h=0; $h<8; $h++) //Triângulo aumenta
                { for($l=-1; $l<$h; $l++)
                    {print "* ";}
                print "\n";}}
    
        elseif ($trianguloouquadrado==2)
             {for ($h=0; $h<8; $h++) //Triângulo diminui
                { for ($l=8; $l>$h; $l--)
                    {print "* ";}
                print "\n";}}

        elseif ($trianguloouquadrado==3)
                {for ($h=0; $h<$n; $h++) //Quadrado
                    { for($l=1; $l<$m; $l++)
                        {print "* ";}
                    print "\n";}}

        elseif ($trianguloouquadrado==40) //40 é a idade do criador do jogo quando The Sims foi lançado
                {print "\n";
                    for ($i = 1; $i <= 5; $i++) {
                    for ($j = 5; $j > $i; $j--) {
                    echo " ";
                    }
                    echo "*";                    
                   
                    for ($j = 1; $j < ($i - 1) * 2; $j++) {
                    echo " ";
                    }
                    if ($i == 1)
                    echo "\n";
                    else
                    echo "*\n";
                   }                 
                   
                   for ($i = 4; $i >= 1; $i--) {
                    
                    for ($j = 5; $j > $i; $j--) {
                    echo " ";
                    }
                    echo "*";
                   
                    for ($j = 1; $j < ($i - 1) * 2; $j++) {
                    echo " ";
                    }
                    if ($i == 1)
                    echo "\n";
                    else
                    echo "*\n";
                   }
                
                print "\nThe Sims é uma série de jogos eletrônicos de simulação de vida real criado pelo designer de jogos Will Wright e produzida pela Maxis.\nO primeiro jogo da série, The Sims, foi lançado em 4 de fevereiro de 2000\n";}

    }
