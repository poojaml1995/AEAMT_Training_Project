<?php 
include_once '../includes/connection.php';

$query = mysqli_query($con, "SELECT * FROM payments") or die(mysqli_error($con));

if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "payment_details-data_" . date('d-m-Y') . ".csv"; 
     
    $f = fopen('php://memory', 'w');      

    $fields = array('Id', 'Enrollment ID', 'Course Code', 'Title', 'Commencing Date', 'Contact Name',
                    'NCPI/UPI Ref No', 'Cheque/DD No', 'NEFT/Transaction Id', 'Bank Name', 'Payment Status',
                     'Date & Time');
    fputcsv($f, $fields, $delimiter);

    while($row = $query->fetch_assoc()){
        $NCPI_UPI_Ref_No = "\t" . $row['NCPI_UPI_Ref_No'];        
        $lineData = array($row['ID'],$row['Enrollment_ID'],"\t" . $row["Course_Code"],$row['Title'],
        $row['Commencing_Date'],$row['Contact_Name'],$NCPI_UPI_Ref_No,$row['Cheque_DD_No'],$row['NEFT_Transaction_Id'],
        $row['Bank_Name'],$row['Payment_Status'],$row['Date_Time']);

        fputcsv($f, $lineData, $delimiter);
    }

    fseek($f, 0);

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    fpassthru($f);    
}
exit;
?>
