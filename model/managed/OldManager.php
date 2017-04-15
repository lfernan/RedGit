<?php

class OldManaged extends DBFacade{
    public $list = array();
    protected static $GET_CATEGORY = "select * from category";
    protected static $DELETE_CATEGORY = "delete from category";    
    protected static $UPDATE_CATEGORY = "update category set";
    protected static $INSERT_CATEGORY = "insert into category (name) values(";
    
    protected static $GET_CHAT = "select * from chat ";
    protected static $DELETE_CHAT = "delete from chat ";
    protected static $UPDATE_CHAT = "update chat set ";
    
    protected static $GET_MESSAGE = "select * from message ";
    protected static $DELETE_MESSAGE = "delete from message ";
    protected static $UPDATE_MESSAGE = "update message set ";
    
    protected static $GET_SERVICE = "select * from service ";
    protected static $DELETE_SERVICE = "delete from service ";
    protected static $UPDATE_SERVICE = "update service set ";
    
    protected static $GET_USER_CATEGORY = "select * from user_category ";
    protected static $DELETE_USER_CATEGORY = "delete from user_category ";
    protected static $UPDATE_USER_CATEGORY = "update user_category set ";
    
    protected static $GET_USER_SERVICE = "select * from user_service ";
    protected static $DELETE_USER_SERVICE = "delete from user_service ";
    protected static $UPDATE_USER_SERVICE = "update user_service set ";
    
    protected static $GET_USERS = "select * from users ";
    protected static $DELETE_USER = "delete from users ";
    protected static $UPDATE_USER = "update users set ";
    protected static $INSERT_USER = "insert into users (name,pass,mail,nick_picture,pictures,phone) values(?,?,?,?,?,?)";
    
    function __construct() {        
    }
    
    function __destruct() {        
    }
    
    /*Users*/
    public function insertUser() {
        //$this->query = self::$INSERT_USER."'".$user->name."','".$user->pass."','".$user->nick_picture."','".$user->pictures."','".$user->phone."')";        
        $this->query = "INSERT INTO users(name, pass, mail) VALUES (".$_POST['name'].",".$_POST['pass'].",".$_POST['mail'].")";
        execute_single_query();
    }
    
    public function deleteUser($id) {
        $this->query = self::$DELETE_CATEGORY.'where id='.$id;
        execute_single_query();
    }

    public function editUser($category) {
        $this->query = self::$UPDATE_CATEGORY.'name='.$category->name.' where id='.$category->id;
        execute_single_query();
    }

    public function getUsers() {
        $this->query = self::$GET_USERS;
        $this->get_results_from_query();
        foreach ($this->rows as $val) {
            $o = new Category();
            $o->id = $val->id;
            $o->name = $val->name;            
            array_push($this->list, $o);
        }
    }
    
    /*Category*/
    public function insertCategory($name) {
        $this->query = self::$INSERT_CATEGORY."'".$name."')";
        execute_single_query();
    }
    
    public function deleteCategory($id) {
        $this->query = self::$DELETE_CATEGORY.'where id='.$id;
        execute_single_query();
    }

    public function editCategory($category) {
        $this->query = self::$UPDATE_CATEGORY.'name='.$category->name.' where id='.$category->id;
        execute_single_query();
    }

    public function getCategory() {
        $this->query = self::$GET_CATEGORY;
        $this->get_results_from_query();
        foreach ($this->rows as $val) {
            $o = new Category();
            $o->id = $val->id;
            $o->name = $val->name;            
            array_push($this->list, $o);
        }
    }
}

?>
