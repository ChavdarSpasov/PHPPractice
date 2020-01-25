<?php

namespace Database;

interface ResultSetInterface
{
    public function fetch( string $class): \Generator;
}