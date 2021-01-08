<?php
/**
 * Plugin Name:       WPDEVTV
 * Plugin URI:        https://wpdev.tv/
 * Description:
 * Version:           1
 * Author:            John Dee
 * Author URI:        https://generalchicken.guru/
 * License:           Copyright (C) author(s)
 */

namespace WPDEV;

die("testing 1 sec....");
//error_reporting(E_ALL & ~E_NOTICE);

//require_once (plugin_dir_path(__FILE__). 'src/WPDEV/autoloader.php');
require_once (plugin_dir_path(__FILE__). 'src/WPDEV/tvlinks_CPT.php');
