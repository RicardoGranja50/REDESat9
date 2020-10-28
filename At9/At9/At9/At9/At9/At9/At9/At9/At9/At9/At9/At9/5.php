<?php
	$soma=0;
	while($soma<=1000){
		$n=rand(0,100);
		$soma=$soma+$n;
		if($soma<=1000)
		{
			echo $soma;
		echo "<br>";
		}
	}

?>