<html>
    <head>
        <title>My PHP</title>
    </head>
    
    <body>
        <h1>My PHP</h1>
        
        <?php
            $servername = getenv("IP");
            $username = getenv("C9_USER");
            $password = "";
            $database = "c9";
            $dbport = 3306;
            
            $db = new mysqli ($servername, $username, $password, $databse, $dbport);
            
            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }
            else {
                echo "Connection OK (".$db->host_info.")";
            }
            
            $query = "Select * Info";
            
            $result = mysqli_query($db, $query);
            
            while ($row = mysqli_fetch_assoc($result)) {
                echo "The ID is: " . $row['id'];
            }
        ?>
    </body>
</html>