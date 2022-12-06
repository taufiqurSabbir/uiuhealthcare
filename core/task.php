<?php
include'database.php';
class Task extends database{

    public function res($name,$password,$email){
        $query = "INSERT INTO users(name,password,email) value('$name','$password','$email')";
        $this->data_write($query);
    }

    public function login($email,$password){
        $query = "SELECT * FROM users where email = '$email' and password = '$password'";
        $result = $this -> data_read($query);
        return $result;
    }


    public function blood_request($user_id,$blood,$number,$detiles){
        $query = "INSERT INTO blood_request(user_id,blood_type,contact,details) value('$user_id','$blood','$number','$detiles')";
        $this->data_write($query);
    }


    public function blood_all(){
        $query = "SELECT * FROM blood_request";
        $result = $this -> data_read($query);
        return $result;
    }


}

?>