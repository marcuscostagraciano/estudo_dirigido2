<?php
print "Digite M ou F: ";
$sexo= (string) fgets(STDIN);
$masc= 'M';
$femi= 'F';
if ((strcasecmp($sexo, $masc))==1 or (strcasecmp($sexo, $masc))==1 and (strcasecmp($sexo,$femi)) ==7)
  {print "Sexo masculino";}
elseif ((strcasecmp($sexo, $femi))!=-7 or (strcasecmp($sexo, $femi))==2 and (strcasecmp($sexo, $femi))==1)
  {print "Sexo feminino";}
else  {print "Sexo inválido";}

/*print strcasecmp($sexo, $masc);
print "\n";
print strcasecmp($sexo, $femi);
print "\n";
print strcasecmp($masc, $femi);
print "\n";
print strcasecmp($femi, $masc); - Números obtidos com essas fórmulas; varia de 1 para 2 dependendo da versão do PHP*/
