<?php

    class ArtistAlbum
    {

        private $id_user;
        private $name;
        private $year;
        private $id_artist;

        public function __construct($id_user = null, $name = null, $year = null, $id_artist = null)
        {
            $this->id_user = $id_user;
            $this->name = $name;
            $this->year = $year;
            $this->id_artist = $id_artist;
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

        public function getYear()
        {
            return $this->year;
        }

        public function setYear($year)
        {
            $this->year = $year;
        }

        public function getIdArtist()
        {
            return $this->id_artist;
        }

        public function setIdArtist($id_artist)
        {
            $this->id_artist = $id_artist;
        }


    }
