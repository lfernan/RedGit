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
            $this->conn->prepare("INSERT INTO users(user,pass) VALUES (?,?)")->execute(array(
                $user->user,
                $user->pass));
            return $this->conn->lastInsertId();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function editUser(Users $user) {
        try {
            $this->conn->prepare("UPDATE users SET name = ?,
                                                   nick = ?,
                                                   video = ?,
                                                   public_phone = ?,
                                                   sex = ?,
                                                   description = ?,
                                                   age = ?,
                                                   measures = ?,
                                                   height = ?,
                                                   weight = ?,
                                                   attention = ?,
                                                   schedules = ?,
                                                   smoking = ?,
                                                   album = ?
                                                   WHERE id = ?")->execute(array(
                $user->name,
                $user->nick,
                $user->video,
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
                $user->album,
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

    public function getUsers($id) {
        try {
            echo $id;
            if ($id != null) {
                $stm = $this->conn->prepare("SELECT * FROM users WHERE id = ? AND  admin = 0");
                $stm->execute(array($id));
            } else {
                $stm = $this->conn->prepare("SELECT * FROM users WHERE admin = 0");
                $stm->execute();
            }

            return $stm->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getLogin($data, $pass) {
        try {

            $stm = $this->conn->prepare("SELECT * FROM users WHERE (user = ? OR mail = ?) AND pass = ?");
            $stm->execute(array($data,
                $data,
                $pass));

            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /* MENSAJES */

    public function getMessages($user) {
        try {
            if ($user != null) {
                $stm = $this->conn->prepare("SELECT users.name,message.description,message.date_hour FROM message
                                            INNER JOIN users ON users.id = message.user_from_id 
                                            and message.user_from_id = ?");
                $stm->execute(array($user));
            } else {
                $stm = $this->conn->prepare("SELECT users.name,message.description,message.date_hour FROM message
                                            INNER JOIN users ON users.id = message.user_from_id");
                $stm->execute();
            }

            return $stm->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /* SERVICIOS */

    public function getServices($user) {
        try {
            if ($user == null) {
                $stm = $this->conn->prepare("SELECT * FROM service");
                $stm->execute();
            } else {
                $stm = $this->conn->prepare("SELECT name FROM service INNER JOIN userservice ON userservice.service_id = service.id
                                            AND userservice.user_id = ?");
                $stm->execute(array($user));
            }
            return $stm->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /* SAVE SERVICES-USER */

    public function insertUserService($idUser, $idService) {
        try {
            $this->conn->prepare("INSERT INTO userservice(user_id,service_id) VALUES (?,?)")->execute(array(
                $idUser, $idService));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}

?>
