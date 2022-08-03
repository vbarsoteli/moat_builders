<?php

	//
	$link = $_GET['l'];
	if (!$_SESSION['user']['id_user'] and $link != 'user_register')
		$link = 'user_login';

	//
	switch ($link) {

		case 'user_register':

			//
			View::load('user/register.php');

			//
			if (sizeof($_POST)) {
				$c = new UserController();
				$c->register($_POST);
			}

		break;

		case 'user_login':

			//
			View::load('user/login.php');

			//
			if (sizeof($_POST)) {
				$c = new UserController();
				$c->login($_POST);
			}

		break;

		case 'artist_listing':

			//
			View::load('artist/listing.php');

		break;

		case 'artist_album':

			//
			View::load('artist_album/create.php');

			//
			if (sizeof($_POST)) {
				$c = new ArtistAlbumController();
				$c->create($_POST);
			}

		break;

		case 'artist_album_listing':

			//
			$class = new ArtistAlbumController();
			$data = $class->listing($_GET['id_artist']);

			//
			if (isset($_GET['delete']) and $_GET['id_artist_album'] and $_GET['id_artist']) {
				$class = new ArtistAlbumController();
				$class->delete($_GET['id_artist_album'], $_GET['id_artist']);
			}

			//
			View::load('artist_album/listing.php', $data);

		break;

		default:
			http_response_code(404);
		break;

	}