<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // instantiate the database class
    $database = new database();

    // connect to the database
    $database->connnect();

    // check if the php was called from the index.php
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {

            // check if the php file was called with an action send
            case 'send':

                // send the query to the database
                $result = $database->send($_POST['sql']);

                // disconnect from the database
                $database->disconnect();

                // return the result to the index.php
                echo json_encode($result);
        }
    }


    class database {

        // database variables
        public $servername = "localhost";
        public $username = "hackathon";
        private $password = "UbuntuW1kt0r1122";
        private $dbname = "Hackathon";
        private $conn = null;

        /**
         * connect to the database
         */
        public function connnect() {
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        }

        /**
         * disconnect from the database
         */
        function disconnect() {
            $this->conn->close();
        }

        /**
         * send a query to the database
         * 
         * @param sql the query to send to the database
         * 
         * @return result result of the query
         */
        function send($sql) {
            
            // send the query to the database
            $result = $this->conn->query($sql);

            // return the results in an array json format
            return $this->result_to_arr($result);
        }

        /**
         * convert the result of a query to a string
         * 
         * @param result the result of a query
         * 
         * @return arr the result of the query as a string
         */
        function result_to_arr($result) {
            $arr = [];
            while ($row = $result->fetch_assoc()) {
                array_push($arr, $row);
            }
            return $arr;
        }
    }
?>
