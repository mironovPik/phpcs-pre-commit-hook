<?php

namespace PHPLinter;

class Installer
{
    public static function install()
    {
        system('sh vendor/wickedreports/phpcs-pre-commit-hook/src/setup.sh');
    }
}