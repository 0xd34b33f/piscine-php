<?php

class Tyrion extends Lannister
{
	function sleepWith($obj)
	{
		if ((is_a($obj, "Stark") and !is_a($obj, "Sansa")) || is_a($obj, "Lannister")) {
			echo "Not even if I'm drunk !\n";
		} else
			echo "Let's do this.\n";
	}
}
