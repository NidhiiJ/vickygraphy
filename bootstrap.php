<?php
define('BASE_PATH', __DIR__);

// Auto page key (can override per page)
$current_page ??= basename($_SERVER['SCRIPT_NAME'], '.php');
?>