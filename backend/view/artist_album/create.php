<div id="usuario_cadastro">

    <div class="conteudo"> 

        <h1>Add Album</h1>

        <form name="form2" id="form2" action="" method="post">

            <input required readonly type="text" name="artist" id="artist" value="<?=$_GET['artist'] ? $_GET['artist'] : '' ?>"  ><br>

            <input required autofocus type="text" name="name" id="name" placeholder="Name of Album" value="<?=$_POST['name'] ? $_POST['name'] : '' ?>" ><br>

            <input required type="tel" name="year" id="year" placeholder="Year of Album" value="<?=$_POST['year'] ? $_POST['year'] : '' ?>" autocomplete="off" ><br>

            <br>

            <button type="submit" name="submit" value="1">Register</button>
            <input type="hidden" name="id_artist" id="id_artist" value="<?=$_GET['id_artist'] ?>" >
            
        </form>

    </div>

</div>
