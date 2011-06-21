<?php

namespace AirOS\TopBarModule;

use AirOS\Module\Module;
use AirOS\ControlCenterBundle\Event\InitAdminDesktopEvent;
use Symfony\Component\HttpFoundation\Session;

class AirOSTopBarModule extends Module
{
	static public function getSubscribedEvents()
	{
		return array(
            'admin_desktop.init' => 'onAdminDesktopInit',
            'user_desktop.init'   => 'onUserDesktopInit',
        );

	}

    public function onAdminDesktopInit(InitAdminDesktopEvent  $event)
    {
    	$session = $event->getSession();
    	$session->set('test1', 'im a test value!');
    }

    public function onUserDesktopInit(InitUserDesktopEvent $event)
    {
    }

}