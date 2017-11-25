<?php

namespace Core\Mvc;


interface MvcContextInterface
{
    public function getControllerName();

    public function getActionName();

    public function getParams();


}