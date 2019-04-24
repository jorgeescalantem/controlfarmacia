<?php 
return [
  '/' => 'HomeController:index',

  // productos
  '/product/get' => 'ProductController:get',
  '/product/update' => 'ProductController:update',

  // transacciones
  '/transaction/get' => 'TransactionController:get',
  '/transaction/update' => 'TransactionController:update',

  // direccionamiento
  '/addressing/get' => 'AddressingController:get',
  '/addressing/update' => 'AddressingController:update',
];