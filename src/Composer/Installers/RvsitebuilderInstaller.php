<?php
namespace Composer\Installers;

class RvsitebuilderInstaller extends BaseInstaller
{
    protected $locations = array(
        'package'    => 'packages/{$vendor}/{$name}/',
        'app'    => 'packages/{$vendor}/{$name}/', 
    );
}
