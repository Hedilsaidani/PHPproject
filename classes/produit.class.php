<?php
include_once 'classes/dbconnect.class.php';
class produit{
  private $pr;

  public function __construct(){
    $pr = new connectdb;
    $connect = $pr->connect();
    $this->pr = $connect;
}

public function affprod(){

  try {
    $req ="SELECT * FROM product ORDER BY pid DESC";
    $result = $this->pr->prepare($req);
    $result->execute();
    return $result; 

  } catch (PDOException $ex) {
    echo $ex->getMessage();
}
}
public function addcart($cid,$pid,$qty,$stutus,$opt,$price){
try {
  $sql ="INSERT INTO cart(cid,pid,qty,stutus,opt,price) VALUES (:cid,:pid,:qty,0,:opt,:price)";
  $req = $this->pr->prepare($sql);
  $req->bindParam(':cid',$cid);
  $req->bindParam(':pid',$pid);
  $req->bindParam(':qty',$qty);
  $req->bindParam(':opt',$opt);
  $req->bindParam(':price',$price);
  $req->execute();
  return $req;

} catch (PDOException $ex) {
  echo $ex->getMessage();
}

}

public function affcart(){

  try {
    $sql = "SELECT * FROM  cart ORDER BY dateof DESC  ";
    $res = $this->pr->prepare($sql);
    $res->execute();
    return $res;
  } catch (PDOException $ex) {
    echo $ex->getMessage();
  }

}
public function remove_f_cart(){
  try {
    $sql = 'DELETE FROM cart WHERE id=:param_id ';
    $req = $this->pr->prepare($sql);
    $req->bindParam(":param_id",$_GET['id']);
    $req->execute();
    return $req;

} catch (PDOException $exception) {
   echo $exception-> getMessage();
}
}

}




?>