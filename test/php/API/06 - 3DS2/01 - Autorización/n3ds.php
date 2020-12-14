<?php
/*
 * this sample code is not specific to the Global Payments SDK and is intended as a simple example and
 * should not be treated as Production-ready code. You'll need to add your own message parsing and 
 * security in line with your application or website
 */
$threeDSMethodData = $_REQUEST["threeDSMethodData"];

// sample ACS response for Method URL Response Notification
// $threeDSMethodData = "eyJ0aHJlZURTU2VydmVyVHJhbnNJRCI6ImFmNjVjMzY5LTU5YjktNGY4ZC1iMmY2LTdkN2Q1ZjVjNjlkNSJ9";

try {
   $decodedThreeDSMethodData = base64_decode($threeDSMethodData);
   $convertedThreeDSMethodData = json_decode($decodedThreeDSMethodData, true);
   $serverTransID = $convertedThreeDSMethodData['threeDSServerTransID']; // af65c369-59b9-4f8d-b2f6-7d7d5f5c69d5  

   // TODO: notify client-side that the Method URL step is complete

   echo '<div id="transID">'.json_encode($convertedThreeDSMethodData).'</div>';

   // optional to return decoded JSON string, see below
} catch (Exception $exce) {
   echo 'Error = '.$e;
}