<?php 
namespace Project\Models;

class UserManager extends Manager{

    //connection Admin

    public function recupAdmin($mail, $pass){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT * FROM hbadmin WHERE mail = ?');
        $req->execute(array($mail)); 
        return $req;
    }

    //connection Users
    public function creatUser($pseudo,$mail,$pass){
        $bdd = $this->bdConnect();
        $user = $bdd->prepare('INSERT INTO users(pseudo,mail,pass) VALUE(?,?,?)');
        
        $user -> execute(array($pseudo,$mail,$pass));
        return $user;
    }

    public function checkUser($mail, $pass){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT * FROM users WHERE mail = ?');
        $req->execute(array($mail)); 
        return $req;
    }

}