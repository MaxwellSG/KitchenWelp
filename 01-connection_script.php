<?
    $mysqli = new mysqli("localhost","dig4530c_group18","Knights125!#","dig4530c_group18");
    if($mysqli->error) {
        print ("Error connecting!  Message: ".$mysqli->error);
    } else {
        print("Connection Successful! \n \r <br/>");
    }
?>
