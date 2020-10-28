<?php
	$nota1=1;
	$nota2=14;
	$nota3=1;
	$media= ($nota1 + $nota2 + $nota3)/3;

	if($media>=9.5){
		echo "Aprovado";
	}
	elseif($media>8 && $media<9.5){
		echo "Ira a recuperação";
	}
	else{
		echo "Reprovado";
	}
?>