<?php

namespace AirOS\ControlCenterBundle\Entity;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\EventDispatcher\EventDispatcher;

class Module extends Bundle
{
	protected $dispatcher;
	protected $subscriberClass;

	public function __construct()
	{
		$this->dispatcher = new EventDispatcher();
		$this->subscriberClass = $this->getSubscriberClass();
		$this->dispatcher->addSubscriber($this->subscriberClass);
	}
}

?>