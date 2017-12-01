<?php

namespace Core\Http;


interface RequestInterface
{
    public function getControllerName();

    public function getActionName();

    public function getParameters();

    public function getQueryString();
}