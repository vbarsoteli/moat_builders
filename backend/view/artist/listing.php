<?php 

    //
    $url = 'https://www.moat.ai/api/task/';

    //       
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Basic: ZGV2ZWxvcGVyOlpHVjJaV3h2Y0dWeQ=='));
    $artist = json_decode(curl_exec($ch), true);
    curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

   // print_r($artist);


?>
<div id="usuario_listagem">
  
<h1>Artist</h1>

<table>
  <tr>
    <th>Id</th>
    <th>Twitter</th>
    <th>Name</th>
    <th>Add Album</th>
    <th>Albums from this<br>Artist</th>
  </tr>
<?php 

    //

    //
    for ($i=0; $i<sizeof($artist); $i++) {

        echo '<tr>';
        echo '<td>'.$artist[$i][0]['id'].'</td>';
        echo '<td>'.$artist[$i][0]['twitter'].'</td>';
        echo '<td>'.$artist[$i][0]['name'].'</td>';
        echo '<td><a href="?l=artist_album&id_artist='.$artist[$i][0]['id'].'&artist='.urlencode($artist[$i][0]['name']).'"><i class="fas fa-plus-circle"></i></a></td>';
       echo '<td><a href="?l=artist_album_listing&id_artist='.$artist[$i][0]['id'].'"><i class="fas fa-compact-disc"></i></a></td>';
        echo '</tr>';

    }



?>

</table>

</div>