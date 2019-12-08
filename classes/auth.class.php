<?php 
include_once 'classes/dbconnect.class.php';
class auth{
private $cnx;

public function __construct(){
    $conn = new connectdb;
    $connect = $conn->connect();
    $this->cnx = $connect;
}

public function register($name,$email,$password,$phone,$adresse){
    try {
        $sql = (" INSERT INTO costumer(name,email,pwd,phone,adresse) VALUES (:param_name,:param_email,:param_pwd,:param_phone,:param_adresse)") ;
        $req = $this->cnx->prepare($sql);
        $req->bindParam(':param_name',$name);
        $req->bindParam(':param_email',$email);
        $req->bindParam(':param_pwd',$password);
        $req->bindParam(':param_phone',$phone);
        $req->bindParam(':param_adresse',$adresse);
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

/*public function check($email){
    $check =$this->cnx->prepare("SELECT email FROM costumer WHERE email ='$email' ");
    if ($check->rowCount() > 1) {
           return 0;
    }else{
          return 1;
    }
}*/

public function select($email,$password){
    
    $check =$this->cnx->prepare("SELECT * FROM costumer WHERE email = :param_email AND pwd = :param_password");
    $check-> bindParam(':param_email',$email);
    $check-> bindParam(':param_password',$password);
    $check->execute();

    if ($check ->rowCount() === 1) {
        while($responce = $check->fetch()){
            session_start();
            $_SESSION['name'] = $responce['name'];
            $_SESSION['cid'] = $responce['cid'];
            header('location:prodindex.php?notif=login');   
        }
    }else{
          header('location:sidebarlog.php?notif=log');
    }
}



}
?>