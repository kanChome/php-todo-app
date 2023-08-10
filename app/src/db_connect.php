<?php
  function dbConnect() {
    $dsn = 'mysql:host=mysql;dbname=dev;charset=utf8';
    $user = 'test';
    $password = 'test';
    
    try {
      new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,]);
      var_dump("疎通確認OK");
    } catch (PDOException $err) {
      header('Content-Type: text/plain; charset=UTF-8', true, 500);
      var_dump($err->getMessage());
      exit();
    }
  }