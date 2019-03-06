<?php
return [
  'path.users' => __DIR__ . '/users/',
  'path.temp' => __DIR__ . '/temp/',
  'delay' => 1,
  'callback.login' => function($success) {
    echo json_encode(['success' => $success]);
  },
  //'redirect.url' => wall::url('?hello'),
  'text.username' => 'Användarnamn'
];