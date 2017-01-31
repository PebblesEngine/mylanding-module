<?php
namespace Pebbles\MyLanding;

use Pebbles\Engine\ModuleManager\ConfigProviderInterface;

class Module implements ConfigProviderInterface{
  public function getConfig(){
    return include(__DIR__ . '/../config/module.config.php');
  }
}
