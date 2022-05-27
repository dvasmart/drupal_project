<?php

$databases['default']['default'] = array (
    'database' => 'test',
    'username' => 'user',
    'password' => 'pass',
    'prefix' => '',
    'host' => 'mysql',
    'port' => '3306',
    'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
    'driver' => 'mysql',
  );
  // Use the TUGBOAT_REPO_ID to generate a hash salt for Tugboat sites.
  $settings['hash_salt'] = hash('sha256', getenv('TUGBOAT_REPO_ID'));