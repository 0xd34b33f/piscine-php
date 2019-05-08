<?php

class Tyrion extends Stark
{
	function sleepWith($obj)
	{
		if (is_a($obj, "Stark")) {
			echo "Not even if I'm drunk !\n";
		}
		else
			echo "Let's do this.";
	}
}