<?php
class database
{
    //property
    protected $connect,
              $host = "localhost",
              $user = "root",
              $pass ="",
              $db = "dbkita";

              //construct
              public function __construct()
              {
                $this->connect =mysqli_connect($this->host,
                $this->user, $this->pass);
                mysqli_select_db($this->connect, $this->db);
              }
}
?>