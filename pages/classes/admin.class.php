<?php
require 'dbconnection.php';
class employee{
    private $cnx;
    public function __construct()
    {
        $db =new BasesDonnees;
        $this->cnx=$db->connectDB();
    }
    public function readAllemployee(){
        try {
             $rep='SELECT * FROM employee';
             $result=$this->cnx->prepare($rep);
             $result->execute();
             return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
 public function creatEmployee($name,$pwd,$email,$phone){
try{
    
    
    $rep ='INSERT INTO employee(name,pwd,email,phone) VALUES ( :param_name, :param_pwd, :param_email, :param_phone)';
    $result = $this->cnx->prepare($rep);
   $result->bindParam (':param_name',$name);
   $result->bindParam (':param_pwd',$pwd);
   $result->bindParam (':param_email',$email);
   $result->bindParam (':param_phone',$phone);
   $result->execute();
   return $result;
}
   catch (PDOException $e) {
   echo $e->getMessage();
}

}


public function readoneemployee($eid)
{
    try {
        $req = 'SELECT * FROM employee WHERE eid= :clt_eid';
        $result = $this->cnx->prepare($req);
        $result->bindParam(':clt_eid', $eid);
        $result->execute();
        return $result;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


public function editEmployee($eid,$name,$pwd,$email,$phone){
    try{
    $req = 'UPDATE employee 
    SET 
    name = :param_name,
    pwd=:param_pwd,
    email=:param_email,
    phone=:param_phone 
    WHERE eid=:param_id';
    $result = $this->cnx->prepare($req);
  
    $result->bindParam (':param_name',$name);
    $result->bindParam (':param_pwd',$pwd);
    $result->bindParam (':param_email',$email);
    $result->bindParam (':param_phone',$phone);
    $result->bindParam (':param_id',$eid);
    $result->execute();
    return $result;
}
catch (PDOException $e) {
    echo $e->getMessage();
 }
   


}

public function delete($eid){
    try{
    $req = "DELETE FROM employee WHERE  eid=:param_id ";
    $result = $this->cnx->prepare($req);

    $result->bindParam(":param_id",$eid);
    $result->execute();
    return $result;
}
catch (PDOException $e) {
    echo $e->getMessage();
 }
    header('location:user.php');
}


}
