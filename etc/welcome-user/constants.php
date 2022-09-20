<?php
// common constants

// declaration
define('_CURRENT_USER_', 'admin');
const _CURRENT_NEW_USER_ = 'user1';

// check
$check1 = defined('_CURRENT_USER_');
$check2 = defined('_CURRENT_NEW_USER_');

echo var_dump($check1);
echo var_dump($check2);