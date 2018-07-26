<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include('db_connect.php');

    if(isset($_GET['statuse'])) {

        //create $status to get data from the url or user input
        $statuse = $_GET['statuse'];

        //insert data into database
        $sql = "INSERT INTO led (statuse) VALUES ('$statuse')";

        if ($conn->query($sql) === TRUE) {

            //successfully inserted
            $response["success"] = 1;
            $response["message"] = "Status Successfully Created!";

            //show JSON response
            echo json_encode($response);

        } else {
            //faild to insert data in database
            $response["success"] = 0;
            $response["message"] = "Something has been wrong";

            //show JSON response
            echo json_encode($response);
        }
    } else {

        //if required parameter is missing
        $response["success"] = 0;
        $response["message"] = "Parameter(s) are missing. Please check the request";
    
        //show json response
        echo json_encode($response);
    }
    
    $conn->close();
?>