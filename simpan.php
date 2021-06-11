<?php
include 'SimpleXLSX.php';
include 'koneksi.php';

$filename = $_FILES['name']['tmp_name'];
$i = 0;

if ($xlsx_file = SimpleXLSX::parse($filename)) {
    foreach ($xlsx_file->rows() as $row) {
        // Check heading row
        if ($i != 0) { 
            if ($row[0] != "" && $row[1]!="" && $row[2]!="") {
                // echo gettype($row[2]);
                // $e = "SELECT * FROM kurs_table WHERE mata_uang = '{$row[2]}'";
                // echo "$e<br>";

                $result = mysqli_query($connect, "SELECT * FROM kurs_table WHERE mata_uang = '{$row[2]}'");
                
                // Check if data is exist
                if (mysqli_num_rows($result) > 0){
                    $result2 = mysqli_query($connect, "SELECT nilai FROM kurs_table WHERE mata_uang ='{$row[2]}'");

                    while($data = mysqli_fetch_array($result2)) {
                        // if 'nilai' value is different from exist data
                        if ($data['nilai'] != $row[0]) {
                            $result3 = "UPDATE kurs_table SET nilai='$row[0]' WHERE mata_uang='{$row[2]}'";

                            if (mysqli_query($connect, $result3)) {
                                // echo "Update record created successfully";
                            } else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                            }
                        }
                    }
                } else {
                    $result4 = "INSERT INTO kurs_table (nilai, satuan, mata_uang) VALUES ('$row[0]', '$row[1]', '$row[2]')";
            
                    if (mysqli_query($connect, $result4)) {
                        // echo "New record created successfully";
                    } else {
                        echo "Error: " . $result4 . "<br>" . mysqli_error($connect);
                    }
                }
            }
        }
        $i++;
    }
}

header('Location: tampil.php');
?>