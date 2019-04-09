<?php

print "Iniciar em: ";
$n=(int) fgets(STDIN);

print "Parar em: ";
$fim=(int) fgets(STDIN);

while ($n<=$fim)
    {   if ($n%2!=0)
            {print "$n ";}
$n++;       
}
