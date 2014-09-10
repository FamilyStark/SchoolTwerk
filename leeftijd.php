<label>Voer uw leeftijd in A.u.b:</label>
<form action="leeftijd.php">
<input type="text" name="age">
<br>
<?php 

if (isset($_GET['age'])) {
	$age = $_GET['age'];
	if ($age < 16) {
		echo "JE MAG HELEMAAL NIKS!!! >:D";
	}
	if ($age >= 16 && $age < 18) {
		echo "Scooter<br>";
	}
	
	if($age >= 18 && $age < 21){
		echo "Rijbewijs<br>";
	}

	if($age >= 21) {
		echo "Zware motoren";
	}

	if ($age >= 101) {
		echo "<h1>Leef jij nog wel?!?!?!</h1>";
	}

}
?>