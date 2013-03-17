<?php
/**
 * This file is part of the PPI Framework.
 *
 * @copyright  Copyright (c) 2011-2013 Paul Dragoonis <paul@ppi.io>
 * @license    http://opensource.org/licenses/mit-license.php MIT
 * @link       http://www.ppi.io
 */

namespace PPI\Config;

/**
 * Implemented by services that provide user-level configuration.
 *
 * @author Vítor Brandão <vitor@ppi.io> <vitor@noiselabs.org>
 */
interface ConfigurationProviderInterface
{
    /**
    * Configuration defaults for a given service.
    *
    * @return array
    */
    public function getConfigurationDefaults();
}
