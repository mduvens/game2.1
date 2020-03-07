<?php
include 'phpconnect.php';
?>
<!DOCTYPE html>
<html>
    <head>
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js" type="text/javascript"></script>
 
    <script>
        $(document).ready(function(){
             recordCount = 3;
            $("button").click(function(){
                console.log("click")
                ++recordCount
                $("#comments").load("loadH.php", {
                    rCount: recordCount
                });
            });
        });
    </script>
</head>
<body>
<link rel="stylesheet" type="text/css" href="style.css">
<div id="comments">
<?php
    $sql = "SELECT * FROM recordes ORDER BY recorde DESC LIMIT 3";
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
</div>

<button id= "btn"> show more highscores </button>

</body>
</html>