<?php

require_once "ArtistAlbum.php";
require_once "DAO.php";

class ArtistAlbumDAO extends DAO
{
    
    public function selectAllfrom($id_artist)
    {

        $sql = "SELECT * FROM artist_album WHERE id_artist = {$id_artist}";

        try {

            $stmt = $this->connection->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();

        } catch (PDOException $e) {
            throw new PDOException($e);
        }

    }

    public function insert($album)
    {

        global $alert;
        
        //
        $id_user = $_SESSION['id_user'];
        $name = $album->getName();
        $year = $album->getYear();
        $id_artist = $album->getIdArtist();

        //
        if (!is_numeric($year))
            $alert = 'Ano deve ser numérico inteiro!';
        elseif (strlen($year) != 4)
            $alert = 'Ano deve ser numérico inteiro no formato 2022!';            
        else {

            //
            $sql = "INSERT INTO artist_album SET dt_hr = NOW(), id_user = :id_user, name = :name, year = :year, id_artist = :id_artist ";
            $stmt = $this->connection->prepare($sql);

            //
            $stmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':year', $year, PDO::PARAM_INT);
            $stmt->bindParam(':id_artist', $id_artist, PDO::PARAM_INT);
            
            try {
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                throw $e;
                return false;
            }

        }

    }

    public function delete($id_artist_album)
    {

        $sql = "DELETE FROM artist_album WHERE id_artist_album = :id_artist_album";
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':id_artist_album', $id_artist_album);

        try {
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            throw new PDOException($e);
        }
        
    }

}
