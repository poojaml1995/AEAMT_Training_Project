<?php 
 
include_once '../includes/connection.php';
 
$query=mysqli_query($con,"SELECT * FROM enrollment_form") or die(mysqli_error($con));
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "enrollment_form-data_" . date('d-m-Y') . ".csv"; 
     
    $f = fopen('php://memory', 'w');      

$fields = array('Id','Enrollment ID','Title','Course Code','Commencing Date','Name','Designation',
'Contact Number','Contact Email','Organisation','Organisation Name','GST Number','Organisation Type',
'CAAP Member','Address','Contact Name','Contact Designation','Contact Mobile No','Email','Fax',
'Accommodation','Remarks','Check In Date','Check Out Date','Payment Details','Source','Date Time');
fputcsv($f, $fields, $delimiter);

while($row = $query->fetch_assoc()){
$lineData = array($row['ID'],$row['Enrollment_ID'],$row['Title'],"\t" . $row["Course_Code"],$row['Commencing_Date'],
$row['Name'],$row['Designation'],$row['Contact_Number'],$row['Contact_Email'],$row['Organisation'],
$row['Organisation_Name'],$row['GST_Number'],$row['Organisation_Type'],$row['CAAP_Member'],
$row['Address'],$row['Contact_Name'],$row['Contact_Designation'],$row['Contact_Mobile_No'],
$row['Email'],$row['Fax'],$row['Accommodation'],$row['Remarks'],$row['checkinDate'],
$row['checkoutDate'],$row['Payment_Details'],$row['Source'],$row['Date_Time']);
fputcsv($f, $lineData, $delimiter);
}

fseek($f, 0);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '";');

fpassthru($f);
}
exit;

?>