<?php
include "dbconnect.php";

$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];

$output = '';
if(isset($_POST['export_excel'])) {
    $sql = "SELECT date,chemical,number_of_bottles FROM CNS_database.bottles_moved_to_chase_log WHERE date >= '$startDate' AND date <= '$endDate'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        $output .= '
            <table>
                <tr>
                    <th>date</th>
                    <th>chemical</th>
                    <th>number_of_bottles</th>
                </tr>
        ';
        while($row = mysqli_fetch_array($result)) {
            $output .= '
                <tr>
                    <td>'.$row["date"].'</td>
                    <td>'.$row["chemical"].'</td>
                    <td>'.$row["number_of_bottles"].'</td>
                </tr>
            ';
        }
        $output .= '</table>';
        header('Content-type: application/xls');
        header('Content-Disposition: attachment; filename="Chemicals_Into_Cleanroom.xls"');
        echo $output;
    }
}

?>