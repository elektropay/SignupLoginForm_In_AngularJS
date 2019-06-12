<?php
//Database Connection
define('db_host', 'gmgcjwawatv599gq.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
define('db_user', 'aq4pbb6v67j1qv2q');
define('db_password', 'v3gz7xrwpc13r2rc');
define('db_name', 'angularjs_login');
class db_conn
{
    private $conn;
    function __construct()
    {
    }
    function connect()
    {
        $this->conn = new mysqli(db_host, db_user, db_password, db_name);
        if (mysqli_connect_errno()) {
            echo "Connection failed" . mysqli_connect_error();
        }
        return $this->conn;
    }
}
?>
