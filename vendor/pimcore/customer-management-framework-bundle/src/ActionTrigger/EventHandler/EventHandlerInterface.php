<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace CustomerManagementFrameworkBundle\ActionTrigger\EventHandler;

use CustomerManagementFrameworkBundle\ActionTrigger\Event\CustomerListEventInterface;
use CustomerManagementFrameworkBundle\ActionTrigger\Event\SingleCustomerEventInterface;

interface EventHandlerInterface
{
    public function handleEvent($event);

    public function handleSingleCustomerEvent(SingleCustomerEventInterface $event);

    public function handleCustomerListEvent(CustomerListEventInterface $event);
}
