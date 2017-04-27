<?php
/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     testing
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 *
 */

date_default_timezone_set('Africa/Nairobi');
//date_default_timezone_set('Europe/Istanbul');
if (strpos($_SERVER['SERVER_NAME'], "www.") === 0) {
    $domain = substr($_SERVER['SERVER_NAME'], 4, strlen($_SERVER['SERVER_NAME']));
    //header("Location: http://$domain");
} else {
    $domain = $_SERVER['SERVER_NAME'];
}

define('APP_VER', 9123164);
define('APP_VER_ADMIN', 1236841);

define('CURRENCY', 'TRY');

define('DOMAIN', $domain);

define('SITE', 'polls');
define('SITE_NAME', 'Polls App');
define('SITE_DB', 'polls');
define('UI', 'frontend');
define('LANG', 'tr');
define('CURRENCY', 'TRY');

switch ($domain) {
    case 'polls.dev':
        $enviroment = 'development';
        break;
    case 'demo.fibosoft.com':
        $enviroment = 'testing';
        break;
    default:
        $enviroment = 'production';
}
define('ENVIRONMENT', $enviroment);
define('BASE_URL', 'http://' . $domain . '/polls_app');
define('THEME', 'main');

$GLOBALS["__LOCALE"] = defined('LANG') ? LANG : 'tr_TR'; // default locale
$GLOBALS["__PATH_TO_ROOT"] = dirname(__FILE__) . "/";
$GLOBALS["__PATH_TO_LOCALE"] = dirname(__FILE__) . "/" . "locale/";
$GLOBALS["__PATH_TO_ADMIN_LOCALE"] = dirname(__FILE__) . "/" . "locale/admin/";
$GLOBALS["__URL_TO_ROOT"] = $domain;
