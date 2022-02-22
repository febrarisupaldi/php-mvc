<?php

namespace Paldi\PHP\MVC\Middleware;

interface Middleware{
    function before():void;
}