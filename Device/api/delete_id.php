<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include('db_connect.php');

    //check if got the id parameter from the user
    if(isset($_GET['id'])) {

        //get id from url
        $id = $_GET['id'];

        //query to retrieve data from database
        $sql = "DELETE FROM led WHERE id = $id";

        //execute the query
        $result = $conn->query($sql);

        if($result === TRUE) {
            //on success
            $response['success'] = 1;
            $response['message'] = "Record have been deleted.";

            //respone json
            echo json_encode($response);
        } else {

            //on failed
            $response['success'] = 0;
            $response['message'] = "Record have not deleted.";

            //respone json
            echo json_encode($response);
        }
    }

    $conn->close();
?>