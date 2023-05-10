<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">



<script src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "testme";
    $password = "testme";
    $dbname = "testme";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset('utf8');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM customer";
    $result = $conn->query($sql);
    if($result){
        while($row = $result->fetch_assoc()) {
            echo $row["id"].' '.$row["onoma"].' '.$row["eponimo"];
        }
    }
 
$conn->close();
?>
</body>
</html>
