<?php

class Managed {

    private $conn;

    function __construct() {
        $this->conn = new PDO('mysql:host=localhost;dbname=red;charset=utf8', 'root', '');
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function __destruct() {        
        //mysqli_close($this->conn);
    }

    /* Users */

    public function insertUser(Users $user) {
        try {
            $stm = $this->conn->prepare("SELECT id FROM users WHERE (user = ? OR mail = ?) LIMIT 1;");
            $stm->execute(array($user->user,                                
                                $user->mail));

            if($stm->rowCount()){
               return 1;
            }else{
                $this->conn->prepare("INSERT INTO users(user, pass, mail) VALUES (?,?,?)")->execute(array(
                    $user->user,
                    $user->pass,
                    $user->mail
                ));
               return 0;
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function updateUserDatos(Users $user) {
        try {            
            $this->conn->prepare("UPDATE users SET name = ?,
                                                   nick_picture = ?,
                                                   pictures = ?,
                                                   public_phone = ?,
                                                   sex = ?,
                                                   description = ?,
                                                   age = ?,
                                                   measures = ?,
                                                   height = ?,
                                                   weight = ?,
                                                   attention = ?,
                                                   schedules = ?,
                                                   smoking = ? 
                                                   WHERE id = ?")->execute(array(
                $user->name,
                $user->nick_picture,
                $user->pictures,                
                $user->public_phone,
                $user->sex,
                $user->description,
                $user->age,
                $user->measures,
                $user->height,
                $user->weight,
                $user->attention,
                $user->schedules,
                $user->smoking,
                $user->id                                       
            ));
            
            return 1;            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function deleteUser($id) {
        try {
            $stm = $this->pdo->prepare("DELETE FROM usuarios WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function editUser(Users $user) {
        
    }

    public function getUsers($id) {
        try {
            if ($id != null) {
                $stm = $this->conn->prepare("SELECT * FROM users WHERE id = ?");
                $stm->execute(array($id));
            } else {
                $stm = $this->conn->prepare("SELECT * FROM users");
                $stm->execute();
            }

            return $stm->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function getLogin($data, $pass) {
        try {
            
             $stm = $this->conn->prepare("SELECT * FROM users WHERE (user = ? OR mail = ?) AND pass = ? LIMIT 1;");
             $stm->execute(array($data,
                                 $data,
                                 $pass));

             return $stm->fetch(PDO::FETCH_OBJ);       
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}

?>
