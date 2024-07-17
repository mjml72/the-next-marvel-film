<?php

    const APIURL = "https://www.whenisthenextmcufilm.com/api";

    function fetchData() {

        $response = file_get_contents(APIURL);
         
        $data = json_decode($response);
        
        return $data;
    }
?>