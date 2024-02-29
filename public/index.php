<?php
use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

ini_set('log_errors', 1);
ini_set('error_log', 'errors.log');

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};