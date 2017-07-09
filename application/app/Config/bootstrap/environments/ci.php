<?php

Environment::configure('ci', false, [
  'MYSQL_DB_HOST' => 'localhost',
  'MYSQL_USERNAME' => 'webapp',
  'MYSQL_PASSWORD' => 'password',
  'MYSQL_DBNAME' => 'test_blog',
  'MYSQL_TEST_DBNAME' => 'test_blog',
  'MYSQL_PREFIX' => '',
], function () {
    CakePlugin::load('Bdd');
});
