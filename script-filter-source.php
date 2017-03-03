<?php

$query = {query};
$blocks = scandir("recipes");

echo '<?xml version="1.0"?>';
echo '<items>';

foreach($blocks as $key=>$value){

	if ((strpos($value, strToLower($query)) !== false) && $value != ".DS_Store") {
		
		$blocktitle = str_replace("-", " ", $value);
		$blocktitle = ucwords($blocktitle);
		$blocktitle = preg_replace("/\\.[^.\\s]{3,4}$/", "", $blocktitle);

		$icon = str_replace(" ", "-", $blocktitle);
		$icon = $icon . ".png";

		echo '<item uid="minecraft_'.$value.'" arg="'.$value.'" valid="yes">';
		echo '<title>'.$blocktitle.'</title>';
		echo '<subtitle>Press Enter to view recipe</subtitle>';
		echo '<icon>icons/'. $icon .'</icon>';
		echo '</item>';
	}	

}

echo '</items>';

?>