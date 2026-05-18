<?php
/**
 * Tigress (PHP version 8.5)
 * Unleash the Power of PHP (MVC Framework)
 *
 * @author      Rudy Mas <rudy.mas@rudymas.be>
 * @copyright   2024-2026, rudymas.be. (https://rudymas.be/)
 * @license     https://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 * @version     2026.05.18.1
 */

use Tigress\Core;

session_start();
require_once('vendor/autoload.php');

const TIGRESS_VERSION = '2026.05.18';
try {
    $Core = new Core();
} catch (Throwable $e) {
    print('<pre>' . $e . '</pre>');
}
