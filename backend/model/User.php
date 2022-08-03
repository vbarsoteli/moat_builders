<?php

    class User
    {
        private $id_user;
        private $name;
        private $username;
        private $password;
        private $role;

        public function __construct($id_user = null, $name = null, $username = null, $password = null, $role  = null)
        {
            $this->id_user = $id_user;
            $this->name = trim($name);
            $this->username = trim($username);
            $this->password = trim($password);
            $this->role = $role;
        }

        public function getIdUser()
        {
            return $this->id_user;
        }

        public function setIdUser($id_user)
        {
            $this->id_user = $id_user;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getUserName()
        {
            return $this->username;
        }

        public function setUserName($username)
        {
            $this->username = $username;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function setPassword($password)
        {
            $this->password = $password;
        }

        public function getRole()
        {
            return $this->role;
        }

        public function setRole($role)
        {
            $this->role = $role;
        }



    }
