<?php

namespace Database;


interface StatementInterface
{
    public function execute(...$params): ResultSetInterface;
}