<?php
require_once 'dbconnect.class.php';

class book_tab{
  private $cnx;

  public function __construct(){
   $db = new connectdb;
   $this->cnx = $db->connect();
  }

  public function book_table($name,$email,$phone,$date,$time,$person){
   
    try {
        $sql= 'INSERT INTO book_table(name,email,phone,date_b,time_b,person) VALUES(:param_name,:param_email,:param_phone,:param_date_b,:param_time_b,:param_person)';
        $bk =$this->cnx->prepare($sql);
        $bk->bindParam(':param_name',$name);
        $bk->bindParam(':param_email',$email);
        $bk->bindParam(':param_phone',$phone);
        $bk->bindParam(':param_date_b',$date);
        $bk->bindParam(':param_time_b',$time);
        $bk->bindParam(':param_person',$person);
        $bk->execute();
        return $req;
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
  }





}



?>