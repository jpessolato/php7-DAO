<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 14/03/2018
 * Time: 15:24
 */
class Usuario {

    private $user_id;
    private $user_name;
    private $user_password;

    public function getUser_id() {
        return $this->user_id;
    }
    public function setUser_id($value) {
        $this->user_id = $value;
    }
    public function getUser_name() {
        return $this->user_name;
    }
    public function setUser_name($value) {
        $this->user_name = $value;
    }
    public function getUser_password() {
    return $this->user_password;
}
    public function setUser_password($value) {
        $this->user_password = $value;
    }
    public function loadById($id) {
        $sql = new Sql();

        $result = $sql->select("SELECT * FROM phpgen_users WHERE user_id = :ID", array(":ID"=>$id));
        if (count($result) > 0 ) {
            $row = $result[0];
            $this->setuser_id( $row["user_id"]);
            $this->setuser_name($row["user_name"]);
            $this->setuser_password($row["user_password"]);
        }
    }

    public function __toString(){
        return json_encode( array(
            "user_id"=>$this->getUser_id(),
            "user_name"=>$this->getUser_name(),
            "user_password"=>$this->getUser_password()
        ));
    }
//SELECT `user_id`, `user_name`, `user_password` FROM `phpgen_users` WHERE 1


//SELECT `user_id`, `user_name`, `user_password` FROM `phpgen_users` WHERE 1

}