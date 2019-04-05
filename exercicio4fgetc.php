<?php

print "Digite uma letra: ";
$letradigitada= fgetc(STDIN);

if ($letradigitada=="A" or $letradigitada=="a" or $letradigitada=="E" or $letradigitada=="e" or $letradigitada=="I" or $letradigitada=="i" or $letradigitada=="O" or $letradigitada=="o" or $letradigitada=="U" or $letradigitada=="u")
    {print "Isso é uma vogal";}

else {print "Isso é uma consoante... Ou até talvez, nem é mesmo é uma letra...";}
