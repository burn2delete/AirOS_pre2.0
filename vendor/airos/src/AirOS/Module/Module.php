<?php

namespace AirOS\Module;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class Module extends Bundle implements EventSubscriberInterface
{
	protected $dispatcher;

	public function __construct()
	{
		$this->dispatcher->addSubscriber($this, $this->getPriority());
	}

	static public function getSubscribedEvents()
    {
    }

    public function getDispatcher()
    {
    	return $this->dispatcher;
    }

    static public function getPriority()
    {
    	return 0;
    }
}

?>