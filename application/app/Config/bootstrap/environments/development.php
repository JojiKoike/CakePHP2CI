<?php

Environment::configure('development', true, [
  'MYSQL_DB_HOST' => 'localhost',
  'MYSQL_USERNAME' => 'webapp',
  'MYSQL_PASSWORD' => 'password',
  'MYSQL_DBNAME' => 'blog',
  'MYSQL_TEST_DBNAME' => 'test_blog',
  'MYSQL_PREFIX' => '',
]);
