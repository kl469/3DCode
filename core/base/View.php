<?php
namespace core\base;

class View
{
    protected $variables = array();
    protected $_controller;
    protected $_action;

    function __construct($controller, $action)
    {
        $this->_controller = strtolower($controller);
        $this->_action = strtolower($action);
    }
 
    public function assign($name, $value)
    {
        $this->variables[$name] = $value;
    }
 
    public function render()
    {
        extract($this->variables);
        $defaultHeader = APP_PATH . 'app/views/header.php';
        $defaultFooter = APP_PATH . 'app/views/footer.php';
        $defaultMain = APP_PATH . 'app/views/main.php';

        $controllerHeader = APP_PATH . 'app/views/' . $this->_controller . '/header.php';
        $controllerFooter = APP_PATH . 'app/views/' . $this->_controller . '/footer.php';
        $controllerMain = APP_PATH . 'app/views/' . $this->_controller . '/main.php';

        if (is_file($controllerHeader)) {
            include ($controllerHeader);
        } else {
            include ($defaultHeader);
        }

        if (is_file($controllerMain)) {
            include ($controllerMain);
        } else {
            include ($defaultMain);
        }

        if (is_file($controllerFooter)) {
            include ($controllerFooter);
        } else {
            include ($defaultFooter);
        }
    }
}
