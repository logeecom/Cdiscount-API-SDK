<?php

namespace Sdk\ConfigTools;

class Configuration
{
    const PROD_URL_TOKEN = 'https://sts.cdiscount.com/users/httpIssue.svc/?realm=https://wsvc.cdiscount.com/MarketplaceAPIService.svc';
    const PROD_URL = 'https://wsvc.cdiscount.com/MarketplaceAPIService.svc';
    const PROD_METHOD_URL = 'http://www.cdiscount.com/IMarketplaceAPIService/';

    const PREPROD_URL_TOKEN = 'https://sts.preprod-cdiscount.com/users/httpIssue.svc/?realm=https://wsvc.preprod-cdiscount.com/MarketplaceAPIService.svc';
    const PREPROD_URL = 'https://wsvc.preprod-cdiscount.com/MarketplaceAPIService.svc';
    const PREPROD_METHOD_URL = 'http://www.cdiscount.com/IMarketplaceAPIService/';

    /**
     * @var array
     */
    private static $configurationParameters = [
        'prod' => [
            'api' => [
                'username' => '',
                'password' => '',
                'urltoken' => self::PROD_URL_TOKEN,
                'url' => self::PROD_URL,
                'methodurl' => self::PROD_METHOD_URL,
            ],
        ],
        'preprod' => [
            'api' => [
                'username' => '',
                'password' => '',
                'urltoken' => self::PREPROD_URL_TOKEN,
                'url' => self::PREPROD_URL,
                'methodurl' => self::PREPROD_METHOD_URL,
            ],
        ],
    ];

    /**
     * @var string
     */
    private static $apiMode = 'prod';

    /**
     * @return string
     */
    public function getApiMode()
    {
        return self::$apiMode;
    }

    /**
     * @param string $apiMode
     */
    public function setApiMode($apiMode)
    {
        self::$apiMode = $apiMode;
    }

    /**
     * Returns configuration parameters based on api mode
     *
     * @param string $apiMode
     *
     * @return array
     */
    public function getConfigurationParameters($apiMode)
    {
        return self::$configurationParameters[$apiMode];
    }

    /**
     * Sets api username and password for current user
     *
     * @param string $username
     * @param string $password
     */
    public function setApiCredentials($username, $password)
    {
        self::$configurationParameters[self::$apiMode]['api']['username'] =
          $username;
        self::$configurationParameters[self::$apiMode]['api']['password'] =
      $password;
    }
}