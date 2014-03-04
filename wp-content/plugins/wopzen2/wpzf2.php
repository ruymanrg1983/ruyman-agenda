<?php 
/**
 * Plugin Name: WPZF2 
 * Plugin URI: http://www.wordpresszendframework2.com/
 * Description: Wordpress and Zend Framework 2 Integration
 * Version: 1.2.1
 * Author: Tao Báez
 * Author URI: http://www.wordpresszendframework2.com/
 * Requires at least: 3.5
 * Tested up to: 3.6
 *
 * Text Domain: wopzen2
 * Domain Path: /i18n/languages/
 *
 * @package WPZF2
 * @category Core
 * @author  Tao Báez
 */ 


$zf2LibraryPath=__DIR__.'/vendor/ZF2/library';
include $zf2LibraryPath . '/Zend/Loader/AutoloaderFactory.php';
Zend\Loader\AutoloaderFactory::factory(array('Zend\Loader\StandardAutoloader' => array('autoregister_zf' => true)));

if (!class_exists('Zend\Loader\AutoloaderFactory')) {   throw new RuntimeException('define a ZF2_PATH environment variable.'); }

$configuration=array(
		'modules' => array(
				'Application',
		),
		'module_listener_options' => array(
				'config_glob_paths'    => array(
						__DIR__.'/module/config/autoload/{,*.}{global,local}.php',
				),
				'module_paths' => array(
						__DIR__.'/module',
						__DIR__.'/vendor',
				),
		),
);

use Zend\EventManager\EventManager;
use Zend\Http\PhpEnvironment;
use Zend\ModuleManager\ModuleManager;
use Zend\Mvc\Application;
use Zend\Mvc\MvcEvent;
use Zend\ServiceManager\ServiceManager;

$config = $configuration;

$serviceManager = new ServiceManager();
$eventManager=new EventManager();


use Zend\Loader\AutoloaderFactory;
use Zend\Mvc\Service\ServiceManagerConfig;
AutoloaderFactory::factory();
// setup service manager
$serviceManager = new ServiceManager(new ServiceManagerConfig());
$serviceManager->setService('ApplicationConfig', $configuration);

// load modules -- which will provide services, configuration, and more
$serviceManager->get('ModuleManager')->loadModules();

// bootstrap and run application
$wpzf2plugin = $serviceManager->get('Application');
$wpzf2plugin = $wpzf2plugin->bootstrap(); 




?>