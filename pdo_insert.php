<?php
//WIlliam Cruz
//6-20-14
//PHP with MYSQL - Query DB - Using PDO to Execute Queries
// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_test_db', 'william', 'vitzma_16');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

// Create the query and assign to var
$query = 'CREATE TABLE National_Parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    location VARCHAR(240) NOT NULL,
    date_established DATE,
    area_in_acres DECIMAL(8,2),
    PRIMARY KEY (id)
)';

// Run query, if there are errors they will be thrown as PDOExceptions
$dbc->exec($query);





