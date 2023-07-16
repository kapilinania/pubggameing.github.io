<?php
// error_reporting(0);
session_start();
require '../connection.php';



$teamName = $_REQUEST['teamname'];
$teamId = $_REQUEST['teamid'];

$men1Data = $_REQUEST['mem1'] ;
$men1Id = $_REQUEST['mem1id'] ;

$men2Data = $_REQUEST['mem2'] ;
$men2Id = $_REQUEST['mem2id'] ;

$men3Data = $_REQUEST['mem3'] ;
$men3Id = $_REQUEST['mem3id'] ;

$men4Data = $_REQUEST['mem4'] ;
$men4Id = $_REQUEST['mem4id'] ;

$men5Data = $_REQUEST['mem5'] ;
$men5Id = $_REQUEST['mem5id'] ;
$idData =  $_SESSION["id"];

$gameValue = $_REQUEST['gameTask'];


$sql = "INSERT INTO `gamer_data`(`id`, `team_name`, `team_id`, `member1`, `member1id`, `member2`, `member2id`, `member3`, `member3id`, `member4`, `member4id`, `member5`, `member5id`, `userId`, `game_name`) VALUES ('','$teamName','$teamId','$men1Data','$men1Id','$men2Data','$men2Id','$men3Data','$men3Id','$men4Data','$men4Id','$men5Data','$men5Id','$idData', '$gameValue')";

if(mysqli_query($conn, $sql)){
    echo
    "<script> alert('YOUR Data Stored');  window.location.href='register.php' ;  </script>";
   

    
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);


?>
<script>

</script>