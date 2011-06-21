<?php

namespace AirOS\TopBarModule;

use AirOS\ControlCenterBundle\Entity\Module;
use AirOS\TopBarModule\Subscriber\DesktopSubscriber;

class AirOSTopBarModule extends Module
{
	public function getSubscriberClass()
	{
		return new DesktopSubscriber();
	}
}