# Installation

Create `core/config.php` with an array as below:

```
$config = [
	'db_name' => '<database name>',
	'db_user' => '<database user>',
	'db_password' => '<database password>',
];
```

# Database

Create a table called `guests` with the following columns:

```
id int(11), auto-increment
firstname text,
lastname text,
email text
```

Here is a ready-made SQL query to create the table:

```
CREATE TABLE `guests` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` text DEFAULT NULL,
  `lastname` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;
```
