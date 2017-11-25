<?php

namespace ViewEngine;


interface ViewInterface
{
    public function render($model = null, $viewName = null);

    //public function url($controller, $action, $params = []);
}