<?php

    require_once('php/lijst.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <style>
        html, body {
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }
        body {
            display: grid;
            place-items: center;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <table id="table" class="display" style="width: 90vw;height: 40vh">
       <thead>
       <tr>
           <?php
                foreach($theads->fetchAll() as $head) {
                    echo '<th>' . $head['Field'] . '</th>';
                }
           ?>
        </tr>
       </thead>
       <tbody>
            <?php
                foreach($data as $i) {
                    echo '<tr>';
                    echo '<td>' . $i['id'] . '</td>';
                    echo '<td>' . $i['name'] . '</td>';
                    echo '<td>' . $i['email'] . '</td>';
                    echo '<td>' . $i['region'] . '</td>';
                    echo '<td>' . $i['country'] . '</td>';
                    echo '</tr>';
                }
            ?>
       </tbody>
    </table>
</body>
<script>
    $(document).ready(function () {
    $('#table').DataTable();
});
</script>
</html>