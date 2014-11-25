<?php

use Evenement\EventEmitterInterface;
use expectation\peridot\ExpectationPlugin;
use cloak\peridot\CloakPlugin;

return function(EventEmitterInterface $emitter)
{
    ExpectationPlugin::create()->register($emitter);
    CloakPlugin::create('cloak.toml')->registerTo($emitter);
};
