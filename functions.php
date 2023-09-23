<?php
    function getJSON($jsonResponse){
        $data = json_decode($jsonResponse);

        // Check if the JSON decoding was successful
        if ($data !== null) {
            // Access the values
            $success = $data->success; // true
            $message = $data->message; // "Update successful"

            // Now you can use $success and $message in your PHP code
            if ($success) {
                $val = true;
            } else {
                $val = false;
            }
        } else {
            // JSON parsing failed
            $val = "error";
        }
        return $val;
    }
?>