<?php
return [
  'path_users' => __DIR__ . '/users/',
  'path_temp' => __DIR__ . '/temp/',
  'setcookie_secure' => false,
  'prefill.password' => 'test',
  'prefill.username' => 'test@example.com',
  /*'callback.login' => function($success) {
    echo json_encode(['success' => $success]);
  },*/
  'redirect.url' => wall::url('?hello'),
];