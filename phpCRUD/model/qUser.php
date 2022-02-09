<?php
include_once('connection.php');
include_once('user.php');
class Q_User
{
    private $dbh;
    function __construct()
    {
        $this->dbh = Connection::getConnection();
    }
    public function getAllUsers()
    {//preparing SQL query
        $sth = $this->dbh->prepare("SELECT * FROM users");
        //execute prepared query
        $sth->execute();
        //fetching the result from the query
        $result = $sth->fetchAll(PDO::FETCH_CLASS, 'User');
        //return the result        
        return $result;
    }
    public function getUserById($id)
    {//preparing SQL query
        $sth = $this->dbh->prepare("SELECT * FROM users WHERE id = :id");
        //execute prepared query
        $sth->execute(array(':id' => $id));
        //fetching the result from the query 
        $sth->setFetchMode(PDO::FETCH_CLASS, 'User');
        $result = $sth->fetch(); 
        //return the result
        return $result;
    }
    // $sth = "Statement Handle"
    // $dbh = "Database Handle"
    public function insertUser($firstname,$lastname,$username,$email)
    {//preparing SQL query
        $sth = $this->dbh->prepare("INSERT INTO users(Firstname,Lastname,Username,Email) VALUES(:firstname,:lastname,:username,:email)");
        //execute prepared query
        $sth->execute(array(':firstname' => $firstname,':lastname' =>$lastname,':username' =>$username,':email' =>$email));
      
    }
    public function updateUser($id,$firstname,$lastname,$username,$email)
    {//preparing SQL query
        $sth = $this->dbh->prepare("UPDATE users SET Firstname = :firstname,Lastname = :lastname,Username = :username,Email = :email WHERE id = :id");   
        //execute prepared query    
        $sth->execute(array(':firstname' => $firstname,':lastname' =>$lastname,':username' =>$username,':email' =>$email,':id' =>$id));
      
    }
    public function deleteUser($id)
    {//preparing SQL query
        $sth = $this->dbh->prepare("DELETE FROM users WHERE id = :id");  
        //execute prepared query     
        $sth->execute(array(':id' =>$id));
     
    }
}