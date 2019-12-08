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

public function affcart1(){
  try {
    $sql = "SELECT * FROM  cart ORDER BY dateof DESC ";
    $res = $this->pr->prepare($sql);
    $res->execute();
    while($data = $res->fetch()){
      $r=$data['pid'];
    }
    $rep = "SELECT * FROM product WHERE pid=:pid ";
    $resu = $this->pr->prepare($rep);
    $resu = bindParam(':pid',$r);
    $resu->execute();
    return $resu;
  } catch (PDOException $exception) {
    echo $exception-> getMessage();
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

public function remove_f_cart($id){
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
public function totcart($cid,$dateof){
  try {
  $sql = "SELECT SUM(price) AS totale FROM cart WHERE cart.cid =:cid AND cart.dateof =:dateof "  ;
  $req = $this->pr->prepare($sql);
  $req->bindParam(':cid',$cid);
  $req->bindParam(':dateof',$dateof);
  $req->execute();
  return $req;

} catch (PDOException $exception) {
  echo $exception-> getMessage();
}

}

public function addord($cid,$pid,$quantity,$optt,$total_price,$odate){
  try {
    $sql = "INSERT INTO orders(cid,pid,quantity,optt,total_price,odate) VALUES (:cid,:pid,:quantity,:optt,:total_price,:odate)";
    $req = $this->pr->prepare($sql);
    $req->bindParam(':cid',$cid);
    $req->bindParam(':pid',$pid);
    $req->bindParam(':quantity',$quantity);
    $req->bindParam(':optt',$optt);
    $req->bindParam(':total_price',$total_price);
    $req->bindParam(':odate',$odate);

    $req->execute();
    
  } catch (PDOException $exception) {
    echo $exception-> getMessage();
  }
}


}




?>