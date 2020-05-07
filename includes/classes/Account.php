<?php
class Account{

    private $con;
    private $errorArray = array();
    public function __construct($con){
        $this->con = $con;
    }

    public function login($un,$pw){
    
        $query = $this->con->prepare("SELECT * FROM users WHERE username=:un
                                        AND password=:pw");

        $query->bindValue(":un",$un);
        $query->bindValue(":pw",$pw);

        $query->execute();
        if($query->rowCount()==1){
            return true;
        }
        else{
            return false;
        }    
    }
}

?>