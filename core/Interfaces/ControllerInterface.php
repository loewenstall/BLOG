<?php

namespace BLOG\core\Interfaces;

interface ControllerInterface {

    public function initializeAction();

    public function listAction();

    public function showAction($param);
}
