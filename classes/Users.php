<?php 

class Users{
    public $name;
    public $email;
    public $password;
    public $user_id;
    public $project_name;
    public $description;
    public $status;

    private $conn;
    private $user_tbl;
    private $project_tbl;

    public function __construct($db){
        $this->conn = $db;
        $this->user_tbl = "tbl_users";
        $this->project_tbl = "tbl_projects";

    }

    public function registerUser(){
        $user_query = "INSERT INTO ". $this->user_tbl." (name, email, password) VALUES (?,?,?)";
        $user_obj = $this->conn->prepare();

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));

        $user_obj->bind_params("sss", $this->name,$this->email,$this->password);

        if($user_obj->execute()){
            return true;
        }
        else{
            return false;
        }
    }
}