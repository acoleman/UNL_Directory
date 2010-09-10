<?php
require_once dirname(__FILE__).'/../config.inc.php';

if (isset($_COOKIE['unl_sso'])) {
    // The user was logged in before, might as well get the CAS auth info.
    UNL_Officefinder::getUser(true);
}

$options = $_GET;
$options['driver'] = $driver;
$peoplefinder  = new UNL_Officefinder($options);


Savvy_ClassToTemplateMapper::$classname_replacement = 'UNL_';
$savvy = new Savvy();
$savvy->setTemplatePath(dirname(dirname(__FILE__)).'/templates/html');


switch($peoplefinder->options['format']) {
    case 'json':
    case 'php':
    case 'vcard':
    case 'xml':
        $savvy->addTemplatePath(dirname(dirname(__FILE__)).'/templates/'.$peoplefinder->options['format']);
        break;
    case 'editing':
        $savvy->setEscape('htmlentities');
        $savvy->addTemplatePath(dirname(dirname(__FILE__)).'/templates/'.$peoplefinder->options['format']);
        break;
    case 'hcard':
    case 'partial':
        Savvy_ClassToTemplateMapper::$output_template['UNL_Officefinder'] = 'Peoplefinder-partial';
        // intentional no break
    default:
        $savvy->setEscape('htmlentities');
}

echo $savvy->render($peoplefinder);