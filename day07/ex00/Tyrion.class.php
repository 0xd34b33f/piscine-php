<?php
class Tyrion extends Lannister
{
	public function __construct()
	{
		parent::__construct();
		print "My name is Tyrion";
	}

	public function getSize(){
		print "Short";
	}
}