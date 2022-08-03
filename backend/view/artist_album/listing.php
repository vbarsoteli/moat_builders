<div id="usuario_listagem">
  
<h1>Albums</h1>

<table>
  <tr>
    <th>Id</th>
    <th>Album</th>
    <th>Year</th>
    <th>Delete this album</th>
  </tr>
<?php 

  //
  if (!$_GET['id_artist']) 
    echo '<a href="?l=artist_listing">Please, select a Artist to see the Albums!</a><br><br>';
  else{

    //
    for ($i=0; $i<sizeof($data); $i++) {

        echo '<tr>';
        echo '<td>'.$data[$i]['id_artist_album'].'</td>';
        echo '<td>'.$data[$i]['name'].'</td>';
        echo '<td>'.$data[$i]['year'].'</td>';

        //
        if ($_SESSION['user']['role'] == 'admin')
          echo '<td><a href="?l=artist_album_listing&delete&id_artist_album='.$data[$i]['id_artist_album'].'&id_artist='.$_GET['id_artist'].'"><i class="fas fa-trash"></i></a></td>';
        else
          echo '<td>Only ADMIN can delete</td>';

        echo '</tr>';

    }

  }

?>

</table>

</div>