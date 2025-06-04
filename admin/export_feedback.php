<?php 
 
include_once '../includes/connection.php';
 
$query=mysqli_query($con,"SELECT * FROM feedback") or die(mysqli_error($con));
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "feedback_form-data_" . date('d-m-Y') . ".csv"; 
     
    $f = fopen('php://memory', 'w');      

$fields = array('ID','Name','Company Name','Title','Course Code','Commencing Date','Program Relavent',
'Schedule Time','Facility Satisfactory','Registration','Sessions Effective','Visit','Workshop Session',
'Hospitality','Accommodation Arrangements','Rate Overall','Remarks','Suggestions','Date Time');
fputcsv($f, $fields, $delimiter);

while($row = $query->fetch_assoc()){
$lineData = array($row['ID'],$row['Name'],$row['Company_Name'],$row['Title'],"\t" . $row["Course_Code"],
$row['Commencing_Date'],$row['Program_Relavent'],$row['Schedule_Time'],$row['Facility_Satisfactory'],
$row['Registration'],$row['Sessions_Effective'],$row['Visit'],$row['Workshop_Session'],
$row['Hospitality'],$row['Accommodation'],$row['Rate_Overall'],$row['Remarks'],
$row['Suggestions'],$row['Date_Time']);
fputcsv($f, $lineData, $delimiter);
}

fseek($f, 0);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '";');

fpassthru($f);
}
exit;

?>