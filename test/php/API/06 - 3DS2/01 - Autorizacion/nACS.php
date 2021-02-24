<?php
/*
 * this sample code is intended as a simple example and should not be treated as Production-ready code 
 * you'll need to add your own message parsing and security in line with your application or website
 */
$cres = $_REQUEST['cres'];

/* $cres = "eyJ0aHJlZURTU2VydmVyVHJhbnNJRCI6ImFmNjVjMzY5LTU5YjktNGY4ZC1iMmY2LTdkN2Q1ZjVjNjlkNSIsImF"
 * . "jc1RyYW5zSUQiOiIxM2M3MDFhMy01YTg4LTRjNDUtODllOS1lZjY1ZTUwYThiZjkiLCJjaGFsbGVuZ2VDb21wbGV0a"
 * . "W9uSW5kIjoiWSIsIm1lc3NhZ2VUeXBlIjoiQ3JlcyIsIm1lc3NhZ2VWZXJzaW9uIjoiMi4xLjAiLCJ0cmFuc"
 * . "1N0YXR1cyI6IlkifQ==";
 */

try {
   $decodedString = base64_decode($cres);
   $convertedObject = json_decode($decodedString, true);

   $serverTransID = $convertedObject['threeDSServerTransID']; // af65c369-59b9-4f8d-b2f6-7d7d5f5c69d5
   $acsTransID = $convertedObject['acsTransID']; // 13c701a3-5a88-4c45-89e9-ef65e50a8bf9
   $challengeCompletionInd = $convertedObject['challengeCompletionInd']; // Y
   $messageType = $convertedObject['messageType']; // Cres
   $messageVersion = $convertedObject['messageVersion']; // 2.1.0
   $transStatus = $convertedObject['transStatus']; // Y

   echo '<div id="respuestaAcs">'.$decodedString.'</div>';


   // TODO: notify client-side that the Challenge step is complete and pass any required data

   // echo json_encode($convertedObject);
} catch (Exception $exce) {
   // TODO: Add your exception handling here
   echo 'Error = '.$e;
}