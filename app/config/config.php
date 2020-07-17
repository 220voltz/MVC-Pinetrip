<?php

const DS = DIRECTORY_SEPARATOR;
const PS = PATH_SEPARATOR;

define('VIEW', APP . 'view' . DS . 'pages' . DS);
define('MODEL', APP . 'model' . DS);
define('DATA', APP . 'data' . DS);
define('CORE', APP . 'core' . DS);
define('CONTROLLER', APP . 'controller' . DS);
define('TEMPLATE', APP . 'view' . DS . 'template' . DS);

$modules = [ROOT,APP,DATA,CORE,CONTROLLER];

set_include_path( get_include_path() . PS . implode( PS, $modules));
spl_autoload_register();


