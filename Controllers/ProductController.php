<?php
require __DIR__.'/../config/database.php';

class ProductController{  

  public $tableName = 'producto';

  function get(){
    return Database::instance()->query("SELECT * FROM $this->tableName");
  }

  function update( $params ){
    $queryValues = '';
    $count = 0;
    $id = $params['post']['idproducto'];
    foreach ($params['post'] as $key => $value) {
      $count ++;
      if( count( $params['post'] ) == $count ){
        $queryValues .= $key.'="'.$value.'"';
      }else{
        $queryValues .= $key.'="'.$value.'",';
      }
    }
    return Database::instance()->query("UPDATE $this->tableName SET $queryValues WHERE idproducto = $id");
  } 
}
