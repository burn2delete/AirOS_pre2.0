<?php
namespace AirOS\ControlCenterBundle;

final class ControlCenterEvents
{
    /**
     * The admin.control_center event is thrown each time the admin desktop is initialized.
     *
     * The event listener receives an AirOS\ControlCenterBundle\Event\AdminDesktopInit
     * instance.
     *
     * @var string
     */
    const onAdminControlCenter = 'admin.control_center';

    /**
     * The user.control_center event is thrown each time the user desktop is initialized.
     *
     * The event listener receives an AirOS\ControlCenterBundle\Event\UserDesktopInit
     * instance.
     *
     * @var string
     */
    const onUserControlCenter = 'user.control_center';
}
?>