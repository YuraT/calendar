<html>
    <head>
        <meta charset="utf-8" />
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <!--font-family: 'Lobster', cursive;-->
        <link type="style/css" rel="stylesheet" href="style.css" />
        <title>My PHP</title>
    </head>
    
    <body>
        <h1>Охота и Рыбалка</h1>
        
    	<div class="content">
            <div class="divNav">
                <ul class="navigation">
	                <li><a href="January.php">Январь</a></li>
	                <li><a href="February.php">Февраль</a></li>
	                <li><a href="March.html">Март</a></li>
	                <li><a href="April.html">Апрель</a></li>
	                <li><a href="May.html">Май</a></li>
	                <li><a href="June.html">Июнь</a></li>
	                <li><a href="July.html">Июль</a></li>
                </ul>
            </div>
		</div>
        
        <?php
            $servername = getenv("IP");
            $username = getenv("C9_USER");
            $password = "";
            $database = "c9";
            $dbport = 3306;
            
            $db = new mysqli ($servername, $username, $password, $database, $dbport);
            
            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }
            else {
                echo "Connection OK (".$db->host_info.")";
            }
            
            $db->query("SET NAMES UTF8");
    
            
            /*$res = $db->query('SELECT * FROM Months Where month="January"');
            
           echo '<div class="section">';
           
            $res->data_seek(0);
            while ($row = $res->fetch_assoc()) {
                echo $row["Title"] . "<br />" . $row["info"];
            }
            echo "</div>"; */
        ?>
    </body>
</html>