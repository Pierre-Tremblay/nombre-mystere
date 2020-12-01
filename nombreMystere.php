<?php
echo "Bonjour,\n";
$Random=rand(0,10);
$v=-1;
$Life=3;
while ($v!=$Random && $Life>0){
	$v=readline("Trouve le nombre mystère!\nUn indice : il se situe entre 0 et 10.\n");
	
if ($v<$Random && $v>=0 && $v<=10){
	
	echo "Le nombre est plus grand! \n";
	$Life= $Life-1;
	echo "Vous perdez une vie.\n";
	echo"Il vous reste " .$Life. " vie(s)\n";
	echo "\n";
}
elseif ($v>$Random && $v>=0 && $v<=10){
    echo "Le nombre est plus petit! \n" ;
	$Life= $Life-1;
	echo "Vous perdez une vie.\n";
	echo"Il vous reste " .$Life.  " vie(s)\n";
	echo "\n";
}
}
if ($v==$Random){
	echo "Bravo! Le nombre était " .$Random."\n";
	echo "\n";
}
elseif ($v!=$Random){
	echo "Perdu! Le nombre était " .$Random."\n";
	echo "\n";
}

?>
