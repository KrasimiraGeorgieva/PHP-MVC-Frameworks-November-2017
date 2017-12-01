<?php

namespace Core\View;


use Core\Http\RequestInterface;

class View implements ViewInterface
{
    /**
     * @var RequestInterface
     */
    private $request;

    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }


    public function render($viewName = null, $model = null)
    {
        if(null == $viewName || is_object($viewName)){
            $model = $viewName;
            $viewName = $this->request->getControllerName()
                . DIRECTORY_SEPARATOR
                . $this->request->getActionName();
        }
        require_once 'views/'. $viewName . '.php';
    }
}