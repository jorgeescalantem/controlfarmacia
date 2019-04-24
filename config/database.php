<?php
require __DIR__.'/../libs/mysql.php';

class Database{
  static function instance(){
    return new DB( 'root' , 'root', 'app', 'localhost' );
  }
}
