<?php
$serveFunc= $_POST['funcName'];
$params=$_POST['params'];
switch($serveFunc){
    case "applyJob":
        applyJob($params);
        break;
    case "applySimilarJobs":
        applySimilarJobs($params);
        break;
}


function applyJob($params){
    require('../database.php');
    $insert_query = "INSERT INTO applied_jobs(candidate_id,job_id) VALUES('$params[userId]','$params[jobId]')";
    $response = mysqli_query($connect,$insert_query);
    return $response;
}

function applySimilarJobs($skillsArr){
echo  $skillsArr;
}
function listAppliedJobs($params){
    require('../database.php');
    $search_query = "SELECT * from applied_jobs WHERE candidate_id='$params[userId]'";
    $response = mysqli_query($connect,$search_query);
    return $response;
}
?>