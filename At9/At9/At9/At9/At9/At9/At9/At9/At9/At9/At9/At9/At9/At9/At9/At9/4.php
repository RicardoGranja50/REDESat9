<?php
	$n1=0;
	$n2=2;
	$n3=1;
	if($n1>$n2 && $n1>$n3 && $n2>$n3){
		echo "O maior numero é ".$n1. " o menor é ".$n3;
	}
	elseif($n1>$n2 && $n1>$n3 && $n3>$n2){
		echo "O maior numero é ".$n1. " o menor é ".$n2;
	}
	elseif($n2>$n1 && $n2>$n3 && $n1>$n3){
		echo "O maior numero é ".$n2. " o menor é ".$n3;
	}
	elseif($n2>$n1 && $n2>$n3 && $n3>$n1){
		echo "O maior numero é ".$n2. " o menor é ".$n1;
	}
	elseif($n3>$n1 && $n3>$n2 && $n2>$n1){
		echo "O maior numero é ".$n3. " o menor é ".$n1;
	}
	else{
		echo "O maior numero é ".$n3. " o menor é ".$n2;
	}
?>