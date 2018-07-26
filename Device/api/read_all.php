<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include('db_connect.php');

    //create array variable
    $response = array();

    //query statement to retrieve data from database
    $sql = "SELECT * FROM devices";

    //query to retrieve data from database
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        //return the value as an array
        $response["devices"] = array();

        // output data of each row
        while($row = mysqli_fetch_array($result)) {

            $devices = array();
            $devices["id"] = $row["id"];
            $devices["status"] = $row["status"];

            //push all the items
            array_push($response["devices"], $devices);
        }
        // on success
        $response["success"] = 1;

        //show json response
        echo json_encode($response);
    } else {
        //on fialed
        $response["success"] = 0;
        $response["message"] = "No data in database.";
        echo json_encode($response);
    }

    $conn->close();
?>