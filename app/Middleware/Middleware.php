<?php

namespace Matt\PhpMvc\Middleware;

interface Middleware
{
    function before():void;
}