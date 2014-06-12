<?php

return array(

  'driver'   => 'smtp',
  'host'     => 'smtp.gmail.com',
  'port'     => '587',
  'username' => $_SERVER['MAIL_USERNAME'],
  'password' => $_SERVER['MAIL_PASSWORD'],
  'pretend'  => false,

);