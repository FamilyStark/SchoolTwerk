<?php
	class Test
	{	
		public function testThis($num)
		{
			if ($num % 2 != 0 && $num % 3 != 0 && $num % 5 != 0 && $num % 7 != 0) {
				echo "Priemgetal!";
			}
			else
			{
				echo "Geen priemgetal!";
			}
		}
	}
	$test = new Test();
	$test->testThis(20);
?>