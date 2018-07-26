<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include('db_connect.php');

    //check if got the id parameter from the user
    if(isset($_GET['id'])) {

        //get id from url
        $id = $_GET['id'];

        //create array variable
        $response = array();

        //query statement to retrieve data from database
        $sql = "SELECT * FROM led WHERE id ='$id'";

        //query to retrieve data from database
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            //return the value as an array
            $response["led"] = array();

            // output data of each row
            while($row = mysqli_fetch_array($result)) {

                $led = array();
                $led["id"] = $row["id"];
                $led["status"] = $row["statuse"];
                

                //push all the items
                array_push($response["led"], $led);
            }
            // on success
            $response["success"] = 1;

            //show json response
            echo json_encode($response);
        } else {
            //on fialed
            $response["success"] = 0;
            echo json_encode($response);
        }
    }

    $conn->close();
?>