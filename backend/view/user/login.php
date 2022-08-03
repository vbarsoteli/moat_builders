<div id="usuario_cadastro">

    <div class="conteudo"> 

        <h1>Login</h1>

        <form name="form2" id="form2" action="" method="post">

            <input required <?=!$_SESSION['temp']['username'] ? 'autofocus' : '' ?> type="text" name="username" id="username" placeholder="Username" value="<?=$_POST['username'] ? $_POST['username'] : $_SESSION['temp']['username'] ?>" ><br>

            <input <?=$_SESSION['temp']['username'] ? 'autofocus' : '' ?> required type="text" name="password" id="password" placeholder="Password" value="" autocomplete="off" ><br>Yep, you can see your password, just for this test!

            <br>

            <button type="submit" name="submit" value="1">Login</button>
            
        </form>

    </div>

</div>
