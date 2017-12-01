<?php

namespace Database;


interface ResultSetInterface
{
    public function fetch($className = null): \Generator;

    public function fetchColumn(int $colNum = 0);
}