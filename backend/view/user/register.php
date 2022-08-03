<div id="usuario_cadastro">

    <div class="conteudo"> 

        <h1>Register</h1>

        <form name="form_usuario" id="form_usuario" action="" method="post">

            <input required autofocus type="text" name="name" id="name" placeholder="Full name" value="<?=$_POST['name'] ? $_POST['name'] : '' ?>"  ><br>

            <input required type="text" name="username" id="username" placeholder="Username" value="<?=$_POST['username'] ? $_POST['username'] : $user['username'] ?>" ><br>

            <input type="text" name="password" id="password" placeholder="Password" value="<?=$_POST['password'] ? $_POST['password'] : '' ?>" autocomplete="off" ><br>

            <select required name="role" >
                <option value="">-</option>
                <option value="user" <?=$_POST['role'] == 'user' ? 'selected' : '' ?>>User</option>
                <option value="admin" <?=$_POST['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
            </select>

            <br>

            <button type="submit" name="submit" value="1">Register</button>
            <input type="hidden" name="id_usuario" id="id_usuario" value="<?=$usuario['id_usuario'] ?>" >
            
        </form>

    </div>

</div>
