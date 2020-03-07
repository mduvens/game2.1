<?php
    include 'phpconnect.php';

    $rCount = $_POST['rCount'];

    $sql = "SELECT * FROM recordes ORDER BY recorde DESC LIMIT $rCount";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo "<p>";
            echo $row['nome'];
            echo "<br>";
            echo $row['recorde'];
            echo "</p>";
        }
    }else{
        echo "THERE ARE NO HIGHSCORES";
    }
?>