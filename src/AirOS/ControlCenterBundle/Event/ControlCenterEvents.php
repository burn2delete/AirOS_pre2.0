<?php
namespace AirOS\ControlCenterBundle\Event;

final class ControlCenterEvents
{
    /**
     * The admin.desktop event is thrown each time the system attempts to create
     * the admin desktop.
     *
     * The event listener receives an AirOS\ControlCenterBundle\Event\InitAdminDesktopEvent
     * instance.
     *
     * @var string
     */
    const InitAdminDesktop = 'admin_desktop.init';

    /**
     * The user.desktop event is thrown each time the system attempts to create
     * the user desktop.
     *
     * The event listener receives an AirOS\ControlCenterBundle\Event\InitUserDesktopEvent
     * instance.
     *
     * @var string
     */
    const InitUserDesktop = 'user_desktop.init';
}
?>