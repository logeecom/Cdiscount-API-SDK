<?php
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 22/09/2016
 * Time: 15:10
 */

namespace Sdk\ConfigTools;

class ConfigFileLoader
{

    #region Private attributes

    /**
     * @var Singleton $instance
     */
    private static $_instance;

    /**
     * @var array of config parameters
     */
    private $_configurationParameters;


    #endregion Private attributes

    #region Constructor

    private function __construct() {

        $this->_loadConfiguration();
    }

    #endregion Constructor

    #region Singleton

    /**
     * Return a unique instance of the token class, initiate it if needed
     * @return ConfigFileLoader
     */
    public static function getInstance() {

        if (self::$_instance === null) {
            self::$_instance = new ConfigFileLoader();
        }

        return self::$_instance;
    }

    /**
     * Reset instance of ConfigFileLoader
     */
    public static function resetInstance()
    {
        self::$_instance = null;
    }

    #endregion Singleton

    #region LoadConfigFile

    /**
     * Load the default config file and after load the environment config file
     */
    private function _loadConfiguration() {

        $configuration = new Configuration();

        $this->_configurationParameters = $configuration->getConfigurationParameters($configuration->getApiMode());
    }

    #endregion LoadConfigFile

    #region public methods

    public function getConfAttribute($attr) {
        return $this->_configurationParameters['api'][$attr];
    }

    #endregion public methods
}