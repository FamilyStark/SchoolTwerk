<?php 
	class Tafels
	{
		public function Tafel($number)
		{
			for ($i=0; $i <= 10; $i++) { 
				echo $i." x ".$number." = ".$i*$number."<br>";
			}
			echo "<br/>";
		}
	}
	$tafels = new Tafels();
	for ($i=0; $i <= 10; $i++) { 
		$tafels->Tafel($i);
	}
?>