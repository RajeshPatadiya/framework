<?php
/**
 * This file is part of the PPI Framework.
 *
 * @category    PPI
 * @package     ServiceManager
 * @copyright   Copyright (c) 2012 Paul Dragoonis <paul@ppi.io>
 * @license     http://opensource.org/licenses/mit-license.php MIT
 * @link        http://www.ppi.io
 */

namespace PPI\ServiceManager;

use Zend\ServiceManager\ServiceManager as BaseServiceManager;

/**
 * ServiceManager implements the Service Locator design pattern.
 *
 * The Service Locator is a service/object locator, tasked with retrieving other
 * objects. We borrow this one from Zend Framework 2.
 *
 * External documentation for ServiceManager:
 * * @link http://packages.zendframework.com/docs/latest/manual/en/modules/zend.service-manager.intro.html
 * * @link http://packages.zendframework.com/docs/latest/manual/en/modules/zend.service-manager.quick-start.html
 * * @link http://blog.evan.pro/introduction-to-the-zend-framework-2-servicemanager
 * * @link https://github.com/zendframework/zf2/blob/master/library/Zend/ServiceManager/ServiceManager.php
 *
 * @author Vítor Brandão <vitor@ppi.io>
 */
class ServiceManager extends BaseServiceManager
{
    /**
     * @param array $configs Array of ConfigInterface instances
     */
    public function __construct($configs = array())
    {
        foreach ($configs as $config) {
            $config->configureServiceManager($this);
        }
        
        // Unfortunately we need this to allow 'response' key to be overridden. 
        // Hopefully in a later version we can refactor and break Backwards Compatibility and thus disable this feature.
        $this->setAllowOverride(true); 
        
    }

    /**
     * An alias to $this->setService()
     */
    public function set($name, $service, $shared = true)
    {
        return $this->setService($name, $service, $shared);
    }
}