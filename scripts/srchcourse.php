<?php

require('config.php');

$data = $_POST['data'];
$term = $data['term'];

$term = stripslashes($term);
$term = mysqli_real_escape_string($con, $term);

$qry = "SELECT * FROM course WHERE title LIKE '%".$term."%'";

if($result = mysqli_query($con, $qry)) {
    
    $response = array('results' => array());
    
    $i = 0;
    
    while($row = mysqli_fetch_assoc($result)) {
        
        $newdata = array(
            'id' => $row['courseid'],
            'title' => $row['title'],
            'department' => $row['department']
        );
        
        $response['results'][] = $newdata;
        
        $i++;
        
    }
    
    echo json_encode($response);
    
}

?>