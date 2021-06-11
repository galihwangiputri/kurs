<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Kurs</title>
</head>

<body>
    <h1>Daftar Kurs 2021<br></h1>

    <div class="d-flex justify-content-center col-sm-6">
        <table class="table table-hover table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nilai</th>
                    <th>Satuan</th>
                    <th>Mata Uang</th>
                </tr>
            </thead>
            <tbody>
                <?php 
            include 'koneksi.php';
            $i=1;

            $datas = mysqli_query($connect, "SELECT * FROM kurs_table");

            while($data = mysqli_fetch_array($datas)) {
            ?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $data['nilai'] ?></td>
                    <td><?php echo $data['satuan']?></td>
                    <td><?php echo $data['mata_uang']?></td>
                </tr>
                <?php  
                $i++;  
            }
            ?>
            </tbody>
        </table>
    </div>



</body>

</html>