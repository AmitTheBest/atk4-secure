<?php
// create folder pub
// create folder pub/atk4
// create symlink pub/atk4/templates to "../atk4/templates"
// create file pub/index.php with:

// include '../atk4/loader.php';
include '../vendor/autoload.php';
include '../lib/Frontend.php';

class RootedFrontend extends Frontend{
   function addDefaultLocations()
   { 
       $base_directory=dirname(dirname(__FILE__));
       $this->base_location=$this->addLocation('..',array(
                   'php'=>'lib',
                   'page'=>'page',
                   'addons'=>array('atk4-addons','ambient-addons'),
                   'xslt'=>'templates/xslt',
                   'mail'=>'templates/mail',
                   'logs'=>'logs',
                   'dbupdates'=>'docs/dbupdates',
                   ))->setBasePath($base_directory)
           ;
   }
}
$api = new RootedFrontend('myrealm');
$api->main();

// create file pub/config.php with:
// ====================================================
// include'../config.php';
// $config['atk']['base_path']='../atk4/';
// ----------------------------------------------------
