<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}/**
 * Created by PhpStorm.
 * User: Mohammad
 * Date: 28/01/2019
 * Time: 04:20 PM
 */
class admin
{

    private $username;
    private $password;
    private $id;
    private $name;
    private $email;
    private $avatar;
    private $phone_number;
    /**
     * admin constructor.
     * @param $type
     * @param string $user
     * @param string $pass
     * @param $id
     */
    public function __construct($type, $user="", $pass="", $id="")
    {
        if($type == "1"){
            $this->username = $user;
            $this->password = $pass;
        }elseif($type == "2"){
            $this->id = $id;
            $db = new database();
            $result1 = $db->get_admin_data($id);
            $this->name = $result1["name"];
            $this->email = $result1["email"];
            $this->avatar = $result1["avatar"];
            $this->username = $result1["username"];
        }
    }

    public function login(){
        $sql = "select * from tbl_admin where username = '". $this->username ."' and password = '". md5($this->password)."'";
        $db = new database();
        $num_row = $db->get_query_row_num($sql);
        if($num_row == 1){
            $myresult = $db->get_result($sql);
            while($row = $myresult->fetch_assoc()){
                $this->id = $row["id"];
                $this->name = $row["name"];
                $this->email = $row["email"];
                $this->avatar = $row["avatar"];
                $this->phone_number = $row["phone_number"];
            }
            $_SESSION["admin_id"] = $this->id;
            return "1";
        }else{
            echo $db->con->error;
            return "0";
        }
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

}