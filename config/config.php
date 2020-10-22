<?php
// More descriptive name in database
$DB_SERVER = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = '';
$DATABASE_NAME = 'midterm_db';

// Create connection
$db_connection = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DATABASE_NAME);

# Throw an error when db connection failed
if($db_connection->error) {
    echo "Connection Error".mysqli_connect_errno();
    exit;
} 

?>