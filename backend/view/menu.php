<div id="menu">

    <a href="?l=artist_listing">Artist</a>
    <a href="?l=artist_album_listing">Albums</a>

    <?php if (!$_SESSION['user']['id_user']) { ?>
        <a href="?l=user_login">Login</a>
        <a href="?l=user_register">Register</a>
    <?php } else { ?>
        <a href="?logout">Logout!</a>
    <?php } ?>

</div>