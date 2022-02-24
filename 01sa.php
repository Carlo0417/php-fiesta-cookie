<?php
	#Practice 4-01
	$CarloQueen = array(
		//array('id', 'species', 'type1', 'type2', 'ability', 'hp', 'attack', 'defense'),

		array(1, 'Bulbasaur', 'Grass', 'Poison', 'Overgrow', 45, 49, 49),

		array(2, 'Ivysaur', 'Grass', 'Poison', 'Overgrow', 60, 62, 63),

		array(3, 'Venusaur', 'Grass', 'Poison', 'Overgrow', 80, 82, 83),

		array(4, 'Charmander', 'Fire', 'N/A', 'Blaze', 39, 52, 43),

		array(5, 'Charmeleon', 'Fire', 'N/A', 'Blaze', 58, 64, 58),
		
		array(6, 'Charizard', 'Fire', 'Flying', 'Blaze', 78, 84, 78),

		array(7, 'Squirtle', 'Water', 'N/A', 'Torrent', 44, 48, 65),

		array(8, 'Wartortle', 'Water', 'N/A', 'Torrent', 59, 63, 80),

		array(9, 'Blastoise', 'Water', 'N/A', 'Torrent', 79, 83, 100),

		array(10, 'Caterpie', 'Bug', 'N/A', 'Shield Dust', 50, 20, 55)
	);

	#Print the array. (number 3)
	echo "<b> Print the array </b> <br>";
	print_r($CarloQueen);
	echo "<br> <br>";
	//var_dump($CarloQueen);

	#Echo the number of elements in an array. (number 4)
	echo "<b> Echo the number of elements in an array </b> <br>";
	echo 'Total Number of Elements: ' . count($CarloQueen);
	echo "<br> <br>";

	#Declare variable $favorite and assign your favorite specie (use array notation). (number 5)
	$favorite = $CarloQueen[4][1];
	
	echo "<b> Declare variable $favorite and assign your favorite specie (use array notation) </b> <br>";
	echo 'My Favorite Specie of Pokemon is <i>'.$favorite.".</i>";
	echo "<br> <br>";

	#Practice 4-01
	//Using foreach display all the species in a list.
	echo "<b> Using foreach display all the species in a list </b> <br> <br>";
	foreach ($CarloQueen as $pokemon) 
	{
		echo implode(" ",$pokemon);
		echo "<br> <br>";
	}
?>
