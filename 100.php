<?php 
	class Number
	{
		public function checkNumber($value)
		{
			if ($value % 2 == 0) {
				echo 'Nummer '.$value.' is even!';
			}
			else {
				echo 'Nummer '.$value.' is oneven!';
			}
			echo "<br>";
		}
	}

	$number = new Number();
	for ($i=0; $i <= 100; $i++) { 
		$number->checkNumber($i);
	}	
?>