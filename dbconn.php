
<?php
        $dbLink = new mysqli('localhost', 'root', '', '');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
?>
<?php
mysql_connect("localhost","root",""); 
mysql_select_db("cloud");
?>
