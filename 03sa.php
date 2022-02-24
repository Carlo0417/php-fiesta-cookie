<?php 
	#Practice 4-04
	$CarloQueen = array('Bulbasaur' => 49, 'Ivysaur' => 63, 'Venusaur' => 83, 'Charmander' => 43, 'Charmeleon' => 58, 'Charizard' => 78, 'Squirtle' => 65, 'Wartortle' => 80, 'Blastoise' => 100, 'Caterpie' => 55);

	#pokemon_defense function will echo the name of the pokemon with defense is greater than or equal to limit_number
	function pokemon_defense($arrayname, $limitnumber)
	{
		echo "<b> pokemon_defense function will echo the name of the pokemon with defense is greater than or equal to limit_number. </b> <br> <br>";

		echo "<b> Limit Number for Pokemon's Defense is $limitnumber. </b> <br> <br>";

		foreach ($arrayname as $pokemon => $defense)
		{
			if($defense >= $limitnumber)
			{
				echo "Pokemon Name: <b>" . $pokemon . "</b> <br>";
				echo "<i> Defense: " . $defense . "</i> <br> <br>";
			}
		}
	}

	pokemon_defense($CarloQueen, 49);
?>
