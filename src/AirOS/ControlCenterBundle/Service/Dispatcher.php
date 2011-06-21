<?php

namespace AirOS\ControlCenterBundle\Service;

use Symfony\Component\EventDispatcher\EventDispatcher;

class Dispatcher
{
	protected $dispatcher;

	public function __construct()
	{
		$this->dispatcher = new EventDispatcher();
	}

}

?>