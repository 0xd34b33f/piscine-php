<?php


class House
{
	function introduce()
	{
		print $this->getHouseName().PHP_EOL;
		print $this->getHouseMotto().PHP_EOL;
		print $this->getHouseSeat().PHP_EOL;
	}
}