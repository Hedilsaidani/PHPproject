<?php 
include_once 'projetPHP/pages/classes/dbconnection.php';
class auth{
private $cnx;

public function __construct(){
    $db =new BasesDonnees;
    $this->cnx=$db->connectDB();
}

public function register($name,$email,$password,$phone){
    try {
        $sql = (" INSERT INTO employee(name,email,pwd,phone) VALUES (:param_name,:param_email,:param_pwd,:param_phone)") ;
        $req = $this->cnx->prepare($sql);
        $req->bindParam(':param_name',$name);
        $req->bindParam(':param_email',$email);
        $req->bindParam(':param_pwd',$password);
        $req->bindParam(':param_phone',$phone);
        $req->execute();
        return $req;

    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }

}
public function passwordhash($password){
    $password = md5($password);
    return $password;
}



public function select($email,$password){
    
    $check =$this->cnx->prepare("SELECT * FROM employee WHERE email = :param_email AND pwd = :param_password");
    $check-> bindParam(':param_email',$email);
    $check-> bindParam(':param_password',$password);
    $check->execute();

    if ($check ->rowCount() === 1) {
        while($responce = $check->fetch()){
            session_start();
            $_SESSION['name'] = $responce['name'];
            $_SESSION['eid'] = $responce['eid'];
            header('location:projetPHP/pages/dashboard.php');   
        }
    }else{
         /* header('location:sidebarlog.php');*/
    }
}



}
?>