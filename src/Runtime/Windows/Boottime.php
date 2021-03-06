<?php

namespace Uptime\Runtime\Windows;

use Uptime\Runtime\RuntimeInterface;

class Boottime implements RuntimeInterface
{

    public function read($command = 'wmic os get lastbootuptime')
    {
        return trim( explode( "\n", shell_exec($command) )[1] );
    }
}
