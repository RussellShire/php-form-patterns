//https://www.codecademy.com/courses/learn-intermediate-php/lessons/php-connecting-to-databases/exercises/connecting-to-the-database

<?php

// Set the hostname as '/tmp'
$hostname = '/tmp'; 
// Set the database name as 'ccuser'
$dbname = 'ccuser'; 

// Set the username and password with permissions to the database
$username = 'ccuser'; 
$password = 'pass';

// Create the DSN (data source name) by combining the database type (PostgreSQL), hostname and dbname
$dsn = "pgsql:host=$hostname;dbname=$dbname";

// Create a PDO object
$db = new PDO($dsn, $username, $password);

// Create a query to get the id, title, and author, and assign it to $booksQuery
$bookQuery =  $db->query('SELECT id, title, author FROM books');

// Fetch one book using the fetch() method and assign it to the $book variable.
$book =  $bookQuery->fetch(PDO::FETCH_ASSOC);
print_r($book);

// Fetch all books using the fetchAll() method and assign the result to the $books variable.
$books =  $bookQuery->fetchAll(PDO::FETCH_ASSOC);
print_r($books);

// Loop over the $books array and echo the title of each book, followed by a line break.
foreach ($books as $book) {
    echo $book["title"] . "\n";
}

// Terminate db connection
$db = null;