<?php

print "Digite alguma letra: ";
$letra= (string) fgets(STDIN);

$a= 'A'; $e= 'E'; $i= 'I'; $o= 'O'; $u= 'U';

if ((strcasecmp($letra,$a))==2 or (strcasecmp($letra,$e))==2 or (strcasecmp($letra,$i))==2 or (strcasecmp($letra,$o))==2 or (strcasecmp($letra,$u))==2)
  {print "Essa letra é uma vogal\n";}

else {print "Essa letra é uma consoante\n";}
