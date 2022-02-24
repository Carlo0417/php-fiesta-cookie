<?php  
	$CarloQueen = array(
		//array('id', 'species', 'type1', 'type2', 'ability', 'hp', 'attack', 'defense'),

		array(1, 'Bulbasaur', 'Grass', 'Poison', 'Overgrow', 'hp' => 45, 'attack' => 49, 49),

		array(2, 'Ivysaur', 'Grass', 'Poison', 'Overgrow', 'hp' => 60, 'attack' => 62, 63),

		array(3, 'Venusaur', 'Grass', 'Poison', 'Overgrow', 'hp' => 80, 'attack' => 82, 83),

		array(4, 'Charmander', 'Fire', 'N/A', 'Blaze', 'hp' => 39, 'attack' => 52, 43),

		array(5, 'Charmeleon', 'Fire', 'N/A', 'Blaze', 'hp' => 58, 'attack' => 64, 58),
		
		array(6, 'Charizard', 'Fire', 'Flying', 'Blaze', 'hp' => 78, 'attack' => 84, 78),

		array(7, 'Squirtle', 'Water', 'N/A', 'Torrent', 'hp' => 44, 'attack' => 48, 65),

		array(8, 'Wartortle', 'Water', 'N/A', 'Torrent', 'hp' => 59, 'attack' => 63, 80),

		array(9, 'Blastoise', 'Water', 'N/A', 'Torrent', 'hp' => 79, 'attack' => 83, 100),

		array(10, 'Caterpie', 'Bug', 'N/A', 'Shield Dust', 'hp' => 50, 'attack' => 20, 55)
	);


	#hp_sum will return the sum of the column hp
	$ttl_hp_sum  = array_sum(array_column($CarloQueen, 'hp'));
	
	function hp_sum($ttl_hp_sum)
	{
		echo "<b> hp_sum will return the sum of the column hp </b> <br>";
		echo "HP Sum of All Pokemons : ".$ttl_hp_sum."<br/> <br>";
	}

	hp_sum($ttl_hp_sum);


	#ave_attack will return the average of column attack
	$attack_sum  = array_sum(array_column($CarloQueen, 'attack'));
	$ttl_ave_attack = $attack_sum / count($CarloQueen);

	function ave_attack($ttl_ave_attack)
	{
		echo "<b> ave_attack will return the average of column attack </b> <br>";
		echo "Average Attack of Pokemons : ".$ttl_ave_attack."<br/> <br>";
	}

	ave_attack($ttl_ave_attack);	
	
?>