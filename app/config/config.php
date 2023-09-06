<?php

define('BASEURL', 'http://localhost:8080/');

function asset($asset)
{
  return BASEURL . 'public/' . $asset;
}

// DB
define('DB_HOST', '__HOST__');
define('DB_USER', '__USER__');
define('DB_PASS', '__PASS__');
define('DB_NAME', '__NAME__');
