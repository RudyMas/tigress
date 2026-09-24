<?php
/**
 * Tigress (PHP version 8.5)
 * Unleash the Power of PHP (MVC Framework)
 *
 * @author      Rudy Mas <rudy.mas@rudymas.be>
 * @copyright   2024-2026, rudymas.be. (https://rudymas.be/)
 * @license     https://opensource.org/licenses/Apache-2.0 Apache License, Version 2.0
 * @version     2026.09.24.0
 */

use Tigress\Core;

session_start();
require_once('vendor/autoload.php');

const TIGRESS_VERSION = '2026.09.24';
try {
    $Core = new Core();
} catch (Throwable $e) {
    print('<pre>' . $e . '</pre>');
}
