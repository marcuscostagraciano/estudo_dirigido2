<?php

print "Primeiro número: ";
$nu1=(float)fgets(STDIN);

print "Segundo número: ";
$nu2=(float)fgets(STDIN);

print "Terceiro número: ";
$nu3=(float)fgets(STDIN);

if ($nu1>$nu2 and $nu1>$nu3 and $nu2>$nu3){
    print "$nu1\n";
    print "$nu2\n";
    print "$nu3\n";
}
if ($nu2>$nu1 and $nu2>$nu3 and $nu3>$nu1){
    print "$nu2\n";
    print "$nu3\n";
    print "$nu1\n";
}
if ($nu3>$nu1 and $nu3>$nu2 and $nu2>$nu1){
    print "$nu3\n";
    print "$nu2\n";
    print "$nu1\n";
}
if ($nu1>$nu2 and $nu1>$nu3 and $nu3>$nu2){
    print "$nu1\n";
    print "$nu3\n";
    print "$nu2\n";
}
if ($nu2>$nu1 and $nu2>$nu3 and $nu1>$nu3){
    print "$nu2\n";
    print "$nu1\n";
    print "$nu3\n";
}
if ($nu3>$nu1 and $nu3>$nu2 and $nu1>$nu2){
    print "$nu3\n";
    print "$nu1\n";
    print "$nu2\n";
