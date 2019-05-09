<?php

class Lannister
{

	function sleepWith($obj)
	{
		if (is_a($obj, "Lannister") and !is_a($obj, "Cersie")) {
			echo "Not even if I'm drunk !\n";
		}
		elseif (is_a($obj, "Cersei"))
			echo "With pleasure, but only in a tower in Winterfell, then.\n";
		else
			echo "Let's do this.\n";
	}
}