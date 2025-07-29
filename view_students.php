<?php
include 'db.php';

// You can still include PhoneNumber in the query if needed later
$sql = "SELECT StudentID, FirstName, LastName, Height, PhoneNumber FROM student";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student List2</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f9;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            margin: auto;
            width: 90%;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            background-color: #fff;
        }

        th, td {
            padding: 12px 16px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: #999;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <h2>Student List</h2>

    <table>
        <tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Height</th>
            <th>Phone Number</th> 
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['StudentID'] ?></td>
            <td><?= $row['FirstName'] ?></td>
            <td><?= $row['LastName'] ?></td>
            <td><?= $row['Height'] ?> cm</td>
            <td><?= $row['PhoneNumber'] ?></td> 
        </tr>
        <?php } ?>
    </table>

    <div class="footer">© <?= date('Y') ?> Kavindu's Student System</div>

</body>
</html>
