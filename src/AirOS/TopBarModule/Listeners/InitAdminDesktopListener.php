<?php

namespace AirOS\TopBarModule\Listeners;

use AirOS\ControlCenterBundle\Event\InitAdminDesktopEvent;

class InitAdminDesktopListener
{
	public function onInitAdminDesktop(InitAdminDesktopEvent $event)
	{
		$session = $event->getSession();
		$session->set('test2', 'im a test value!');
	}

}

?>