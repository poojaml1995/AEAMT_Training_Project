<?php 
 
include_once '../includes/connection.php';
 
$query=mysqli_query($con, "SELECT * FROM enrollment_form WHERE Accommodation = 'Yes'") or die(mysqli_error($con));
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "Guest_house_data_" . date('d-m-Y') . ".csv"; 
     
    $f = fopen('php://memory', 'w');      

$fields = array('ID','Enrollment ID','Title','Course Code','Commencing Date','Name',
'Designation','Contact Number','Contact Email','Organisation','Organisation Name','GST Number',
'Organisation Type','Accommodation','check In Date','check Out Date','Number of Members Requiring Accommodation','Remarks','Date Time');
fputcsv($f, $fields, $delimiter);

while($row = $query->fetch_assoc()){
$lineData = array($row['ID'],$row['Enrollment_ID'],$row['Title'],"\t" . $row["Course_Code"],
$row['Commencing_Date'],$row['Name'],$row['Designation'],$row['Contact_Number'],
$row['Contact_Email'],$row['Organisation'],$row['Organisation_Name'],$row['GST_Number'],
$row['Organisation_Type'],$row['Accommodation'],$row['checkinDate'],$row['checkoutDate'],
$row['Accommodation_Members'],$row['Remarks'],$row['Date_Time']);
fputcsv($f, $lineData, $delimiter);
}

fseek($f, 0);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '";');

fpassthru($f);
}
exit;

?>