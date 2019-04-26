<?php

namespace PHPLinter;

class Installer
{
    public static function install()
    {
        system('sh vendor/mironov-pik/pik-pre-commit-hook/src/setup.sh');
    }
}