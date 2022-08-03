<?php

	class Database
	{

		// const HOST = 'localhost';
		// const DATABASE = 'moat_builders';
		// const USER = 'root';
		// const PASSWORD = '123456';

		const HOST = '34.199.176.63';
		const DATABASE = 'moat_builders';
		const USER = 'moat_builders';
		const PASSWORD = 'BJ2slj22908d';

		public static $connection;
	
		public static function getConnection()
		{
			$dsn = 'mysql://host='.self::HOST.';dbname='.self::DATABASE.';charset=utf8';
			try {
				self::$connection = new PDO($dsn, self::USER, self::PASSWORD);
				self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return self::$connection;
			} catch (PDOException $e) {
				throw new PDOException($e);
			}
		}
	}