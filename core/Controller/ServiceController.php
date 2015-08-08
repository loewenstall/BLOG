<?php

namespace BLOG\core\Controller;

use \BLOG\core\Service\PluginService;

class ServiceController {

    /**
     * @var \BLOG\core\Service\PluginService
     */
    protected $plugins;

    function __construct() {
        $this->initializeService();
    }

    /**
     *
     */
    protected function initializeService() {
        $this->plugins = new PluginService();
    }

    /**
     * @return \BLOG\core\Service\PluginService
     */
    public function getPlugins() {
        return $this->plugins;
    }
}
