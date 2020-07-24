-- kreiranje baze
CREATE DATABASE IF NOT EXISTS limibloger
CHARACTER SET = utf8 COLLATE = utf8_general_ci;
USE limibloger;

-- tabela users
CREATE TABLE IF NOT EXISTS users (
	id INT(11) unsigned NOT NULL AUTO_INCREMENT,
	username VARCHAR(60) COLLATE utf8_general_ci NOT NULL DEFAULT '',
	email VARCHAR(80) COLLATE utf8_general_ci NOT NULL DEFAULT '',
	password VARCHAR(64) COLLATE utf8_general_ci NOT NULL DEFAULT '',
	role ENUM('user', 'bloger', 'admin') NOT NULL DEFAULT 'user',
	created_at DATETIME NOT NULL,
	updated_at DATETIME NOT NULL,
	PRIMARY KEY (id)
) ENGINE = InnoDB
DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci AUTO_INCREMENT = 1;


-- tabela user sessions
-- CREATE TABLE IF NOT EXISTS user_sessions (

-- ) ENGINE = InnoDB
-- DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci AUTO_INCREMENT = 1;


-- tabela categories
CREATE TABLE IF NOT EXISTS categories (
	id INT(11) unsigned NOT NULL AUTO_INCREMENT,
	title VARCHAR(60) COLLATE utf8_general_ci NOT NULL DEFAULT '',
	description VARCHAR(120) COLLATE utf8_general_ci NOT NULL DEFAULT '',
	created_at DATETIME NOT NULL,
	updated_at DATETIME NOT NULL,
	PRIMARY KEY (id)
) ENGINE = InnoDB
DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci AUTO_INCREMENT = 1;


-- tabela posts
CREATE TABLE IF NOT EXISTS posts (
	id INT(11) unsigned NOT NULL AUTO_INCREMENT,
	title VARCHAR(60) COLLATE utf8_general_ci NOT NULL DEFAULT '',
	body TEXT COLLATE utf8_general_ci NULL,
	img VARCHAR(80) COLLATE utf8_general_ci NULL,
	category_id INT(11) unsigned NOT NULL,
	user_id INT(11) unsigned NOT NULL,
	created_at DATETIME NOT NULL,
	updated_at DATETIME NOT NULL,
	PRIMARY KEY (id)
) ENGINE = InnoDB
DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci AUTO_INCREMENT = 1;


-- tabela subscriptions
CREATE TABLE IF NOT EXISTS subscriptions (
	id INT(11) unsigned NOT NULL AUTO_INCREMENT,
	email VARCHAR(80) COLLATE utf8_general_ci NOT NULL DEFAULT '',
	created_at DATETIME NOT NULL,
	PRIMARY KEY (id)
) ENGINE = InnoDB
DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci AUTO_INCREMENT = 1;


-- insert kategorija
INSERT INTO categories VALUES
(NULL, 'Events', 'LimiBlog events', now(), now()),
(NULL, 'Blogs', 'Our blogs...', now(), now());
