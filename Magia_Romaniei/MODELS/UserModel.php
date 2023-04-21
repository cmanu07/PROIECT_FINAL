<?php

class UserModel extends ConnModel
{
    protected $name;
    protected $userName;
    protected $email;
    protected $password;

    public function __construct($uName='J', $uUserName='N', $uEmail='email', $uPass='pass') {
        $this->name = $uName;
        $this->userName = $uUserName;
        $this->email = $uEmail;
        $this->password = $uPass;
    }

    public function signUpUser($user, $userN, $userE, $userP) {
        $hashP = password_hash($userP, PASSWORD_DEFAULT);
        $q = "INSERT INTO `proiect_final_users`(`Name`, `UserName`, `Email`, `Password`) VALUES (?, ?, ?, ?);";
        $myPrep = $this->dbConn()->prepare($q);
        $myPrep -> bind_param("ssss", $user, $userN, $userE, $hashP);
        return $myPrep->execute();
    }

    public function isAuth($uName, $uPass) {
        $q = "SELECT * FROM `proiect_final_users` WHERE `UserName`= ? OR `Email`= ?;";
        $myPrep = $this->dbConn()->prepare($q);
        $myPrep -> bind_param("ss", $uName, $uName);
        $myPrep -> execute();
        $result = $myPrep->get_result()->fetch_assoc();

        if ($result) {
            if (password_verify($uPass, $result['Password'])) {
                return $result;
            } else return false;
        } else return false;
    }
}