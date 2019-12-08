<?php
include_once './profclass/dbconnect.class.php';
class profile{
  private $pf;

  public function __construct(){
    $pf = new connectdb;
    $connect = $pf->connect();
    $this->pf = $connect;
}

public function affprofile($cid){

    try {
      $req ="SELECT * FROM costumer where cid =:cid ";
      $result = $this->pf->prepare($req);
      $result->bindParam(':cid',$cid);
      $result->execute();
      return $result; 

  
  
    } catch (PDOException $ex) {
      echo $ex->getMessage();
  }
  }


}