<?php

require_once "User.php";
require_once "DAO.php";

class UserDAO extends DAO
{
    
    public function insert($user)
    {

        global $alert;

        //
        $name = $user->getName();
        $username = $user->getUserName();
        $password = $user->getPassword();
        $role = $user->getRole();

        //
        $sql = "SELECT id_user FROM user WHERE username = :username LIMIT 1 ";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetchAll();

        //
        if ($user[0]['id_user'])
            $alert = 'This username already been taken, sorry you are late!';
        elseif ($username == trim($username) && strpos($username, ' ') !== false)
            $alert = 'Please remove the spaces from your username, tks!';
        elseif (strlen($password) < 12)
            $alert = 'Password must have at least 12 caracters for your security ;)';
        else {

            $sql = "INSERT INTO user SET dt_hr = NOW(), name = :name, username = :username, password = :password, role = :role ";
            $stmt = $this->connection->prepare($sql);

            $stmt->bindParam(':name', $name, PDO::PARAM_INT);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->bindParam(':role', $role, PDO::PARAM_STR);
            
            try {

                //
                $stmt->execute();

                //
                $_SESSION['temp']['username'] = $username;
                
                //
                return true;

            } catch (PDOException $e) {
                throw $e;
                return false;
            }

        }

        //
        return false;

    }

    public function login($user)
    {

        global $alert;

        //
        $username = $user->getUserName();
        $password = $user->getPassword();

        $sql = "SELECT id_user, name, role FROM user WHERE username = :username AND password = :password LIMIT 1 ";
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        try {

            //
            $stmt->execute();
            $login = $stmt->fetchAll();

            //
            if (!$login[0]['id_user']) 
                $alert = 'Sorry, we could not find an account with this username. Please check you are using the right username and try again.';
            else {

                //
                $_SESSION['user']['id_user'] = $login[0]['id_user'];
                $_SESSION['user']['name'] = $login[0]['name'];
                $_SESSION['user']['role'] = $login[0]['role'];

                //
                return true;

            } 

        } catch (PDOException $e) {
            throw new PDOException($e);
        }

        //
        return false;

    }

}
