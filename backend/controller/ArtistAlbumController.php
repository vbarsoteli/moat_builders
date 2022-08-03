<?php 

    require_once "backend/model/ArtistAlbum.php";
    require_once "backend/model/ArtistAlbumDAO.php";

    class ArtistAlbumController {

        private $data;

        public function listing($id_artist)
        {
            
            //
            if ($id_artist) {
                
                $this->data = array();
                $dao = new ArtistAlbumDAO();

                try {
                    $data = $dao->selectAllfrom($id_artist);
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }

                return $data;

            } else
                return false;

        }

        function create($data) {

            try {

                //
                $album = new ArtistAlbum();
                $album->setName($data['name']);
                $album->setYear($data['year']);
                $album->setIdArtist($data['id_artist']);

                //
                $dao = new ArtistAlbumDAO();
                $insert = $dao->insert($album);

                //
                if ($insert) {
                    header('location: ?l=artist_album_listing&id_artist='.$data['id_artist']);
                    exit;
                }

            } catch (PDOException $e) {
                echo $e->getMessage();
            }

        }

        public function delete($id_artist_album, $id_artist)
        {

            $dao = new ArtistAlbumDAO();
            try {

                $dao->delete($id_artist_album);

                //
                header('location: ?l=artist_album_listing&id_artist='.$id_artist);
                exit;

            } catch (PDOException $e) {
                echo $e->getMessage();
            }

        }

    }