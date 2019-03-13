<?php
return [
  'path.users' => __DIR__ . '/users/',
  'path.temp' => __DIR__ . '/temp/',
  'cookie.secure' => false,
  'prefill.password' => 'test',
  'prefill.username' => 'test@example.com',
  /*'callback.login' => function($success) {
    echo json_encode(['success' => $success]);
  },*/
  'redirect.url' => wall::url('?hello'),
];