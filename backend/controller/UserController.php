<?php 

    require_once "backend/model/User.php";
    require_once "backend/model/UserDAO.php";

    class UserController {

        private $data;
    
        function register($data) {

            try {

                //
                $u = new User();
                $u->setName($data['name']);
                $u->setUserName($data['username']);
                $u->setPassword($data['password']);
                $u->setRole($data['role']);

                //
                $dao = new UserDAO();
                $insert = $dao->insert($u);

                //
                if ($insert) {
                    header('location: ?l=user_login');
                    exit;
                }

            } catch (PDOException $e) {
                echo $e->getMessage();
            }

        }

        function login($data) {

            try {

                //
                $u = new User();
                $u->setUserName($data['username']);
                $u->setPassword($data['password']);

                //
                $dao = new UserDAO();
                
                //
                if (!$dao->login($u)) 
                    $alert = 'Sorry, we could not find an account with this username. Please check you are using the right username and try again.';
                else {

                    //
                  //  $_SESSION['user_logged'] = true;

                    //
                    header('location: ?l=artist_listing');
                    exit;

                }

            } catch (PDOException $e) {
                echo $e->getMessage();
            }

        }
        
    }