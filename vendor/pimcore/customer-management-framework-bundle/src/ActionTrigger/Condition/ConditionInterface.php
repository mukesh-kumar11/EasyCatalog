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

namespace CustomerManagementFrameworkBundle\ActionTrigger\Condition;

use CustomerManagementFrameworkBundle\Model\CustomerInterface;
use Psr\Log\LoggerInterface;

interface ConditionInterface
{
    /**
     * ConditionInterface constructor.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger);

    /**
     * @param ConditionDefinitionInterface $conditionDefinition
     * @param CustomerInterface $customer
     *
     * @return bool
     */
    public function check(ConditionDefinitionInterface $conditionDefinition, CustomerInterface $customer);

    /**
     * @param ConditionDefinitionInterface $conditionDefinition
     *
     * @return string
     */
    public function getDbCondition(ConditionDefinitionInterface $conditionDefinition);

    /**
     * @param $setting
     *
     * @return ConditionDefinitionInterface
     */
    public static function createConditionDefinitionFromEditmode($setting);

    /**
     * @param ConditionDefinitionInterface $conditionDefinition
     *
     * @return array
     */
    public static function getDataForEditmode(ConditionDefinitionInterface $conditionDefinition);
}
