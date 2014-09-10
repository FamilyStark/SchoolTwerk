<?php
	class Test
	{	
		public function testThis($num)
		{
			if ($num != 2 && $num != 3 && $num != 5 && $num != 7) {
				if ($num % 2 != 0 && $num % 3 != 0 && $num % 5 != 0 && $num % 7 != 0) {
					echo "Priemgetal!";
				}
				else
				{
					echo "Geen priemgetal!";
				}
			}
			else
			{
				echo "Priemgetal!";
			}
		}
	}
	$test = new Test();
	$test->testThis(9);
?>