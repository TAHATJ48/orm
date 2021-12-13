<?php   
$pdo = new PDO('mysql:host=localhost;dbname=testing3', 'root', '');
$query = "SELECT  * from tickets";
$d = $pdo->query($query);  



 ?>
 
<?php  
 
 $query = $pdo->query("SELECT * FROM tickets"); 
if ($query  ->rowCount() > 0){
    $delimiter = ","; 
    $filename = "tickets" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('nom', 'service  ', 'description  '); 
    fputcsv($f, $fields, $delimiter); 
    while($row = $query->fetch(PDO::FETCH_ASSOC)){ 
        $lineData = array($row['nom'], $row['service'], $row['description']); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit;  ?>