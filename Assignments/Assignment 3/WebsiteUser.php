<?php

class WebsiteUser{
    /* Host address for the database */
    protected static $DB_HOST = "localhost";
    /* Database username */
    protected static $DB_USERNAME = "choycom_eatery1";
    /* Database password */
    protected static $DB_PASSWORD = "zq#DqC8fNoMk";
    /* Name of database */
    protected static $DB_DATABASE = "choycom_eatery2";
    
    private $username;
    private $password;
    private $mysqli;
    private $dbError;
    private $authenticated = false;
    
    function __construct() {
        $this->mysqli = new mysqli(self::$DB_HOST, self::$DB_USERNAME, 
                self::$DB_PASSWORD, self::$DB_DATABASE);
        if($this->mysqli->errno){
            $this->dbError = true;
        }else{
            $this->dbError = false;
        }
    }
    public function authenticate($username, $password){
        $loginQuery = "SELECT * FROM adminusers WHERE Username = ? AND Password = ?";
        $stmt = $this->mysqli->prepare($loginQuery);
        $stmt->bind_param($username, $password);
        $stmt->execute();
        $result = $stmt->bind_result($username, $password);
        if($result->num_rows == 1){
            $this->username = $username;
            $this->password = $password;
            $this->authenticated = true;
        }
        $stmt->free_result();
    }
    public function isAuthenticated(){
        return $this->authenticated;
    }
    public function hasDbError(){
        return $this->dbError;
    }
    public function getUsername(){
        return $this->username;
    }
}
?>
