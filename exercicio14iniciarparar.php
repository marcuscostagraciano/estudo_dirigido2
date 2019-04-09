<?php

print "Iniciar em: ";
$n=(int) fgets(STDIN);

print "Parar em: ";
$fim=(int) fgets(STDIN);

if ($n<$fim)
    {while ($n<=$fim)
        {   if ($n%2!=0)
                {print "$n ";}
        $n++;       
    }}

elseif ($n>$fim)
    {while ($n>=$fim)
        {   if ($n%2!=0)
                {print "$n ";}
        $n--;       
    }}
