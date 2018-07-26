<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include('db_connect.php');

    //check if we got data form the user or not
    if(isset($_GET['id']) && isset($_GET['status'])) {

        //create $temp & $hum to get data from the url or user input
        $id = $_GET['id'];
        $status = $_GET['status'];
       

        //update data into database
        $sql = "UPDATE devices SET status = '$status' WHERE id = $id";

        //check the record update or not
        if ($conn->query($sql) === TRUE) {

            //successfully update
            $response["success"] = 1;
            $response["message"] = "Update Successfully!";

            //show JSON response
            echo json_encode($response);

        } else {

            //failed to update data in database
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