<!DOCTYPE html>
<html>
<head>
    <title>Praise Party Registrations</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <style>
        th, td {
            padding: 15px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Praise Party Registrations</h2>

<table id="dataTable" class="display" style="width:100%">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Province</th>
        <th>Member</th>
        <th>Parish</th>
        <th>Code</th>
        <th>Registered On</th>
        <!-- Add more columns if needed -->
    </tr>
    </thead>
    <tbody>
    <?php
    // Database connection parameters
    $servername = "localhost";
    $username = "praise_party_user";
    $password = "lbwulhckxznqu3ir59wf";
    $database = "praise_party";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to fetch data from the database
    $sql = "SELECT `id`, `name`, `email`, `phone`, `gender`, `province`, `member`, `parish`, `code`, `created_at` FROM praise_party_registrations";
    $result = $conn->query($sql);

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td>" . $row["province"] . "</td>";
        echo "<td>" . $row["member"] . "</td>";
        echo "<td>" . $row["parish"] . "</td>";
        echo "<td>" . $row["code"] . "</td>";
        echo "<td>" . $row["created_at"] . "</td>";
        // Add more columns if needed
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
                'print'
            ]
        });
    });
</script>

<?php
// Close connection
$conn->close();
?>

</body>
</html>
