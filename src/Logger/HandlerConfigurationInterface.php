<?php

/**
 * TechDivision\Import\Configuration\Logger\HandlerConfigurationInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Configuration\Logger;

use TechDivision\Import\Configuration\ParamsConfigurationInterface;

/**
 * The interface for a logger's handler configuration.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2020 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import-configuration
 * @link      http://www.techdivision.com
 */
interface HandlerConfigurationInterface extends ParamsConfigurationInterface
{

    /**
     * Return's the handler's DI ID to use.
     *
     * @return string The DI ID
     */
    public function getId();

    /**
     * Return's the handler's formtter to use.
     *
     * @return \TechDivision\Import\Configuration\Logger\FormatterConfigurationInterface
     */
    public function getFormatter();

    /**
     * Return's the swift mailer configuration to use.
     *
     * @return \TechDivision\Import\Configuration\SwiftMailerConfigurationInterface The swift mailer configuration to use
     */
    public function getSwiftMailer();
}
