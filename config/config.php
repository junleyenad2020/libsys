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


<?php 

class Connect {

    // connect this using instantiate the class
    // and connect like this Connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DATABASE_NAME)

    public function __construct($server, $username, $password, $db_name) {
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
        $this->db_name = $db_name;
        $this->connect();
    }

    public function message($messag) {

        return $message;
    }
    // create connection through mysqli
    public function connect() {

        $connection = new mysqli($this->server, 
                                 $this->username, 
                                 $this->password, 
                                 $this->db_name);

        if($connection->error) { 
            $this->message('Connection Error'); 
                return mysqli_connect_errno();
        }
    }
    // close connection
    public function close() {
        return mysqli_close();
    }

    public function get_first_row($sql) {
        $results = $this->connect()->query($sql);
        while($row = $results->fetch_row()){
            echo($row); //print row
        }
        $result->close();
    $this->close();
    }
}

?>