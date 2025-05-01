<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
        rel="stylesheet" />
</head>
<style>
    .container {
        max-width: 70vw;
        margin: auto;
        margin-top: 2rem;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #333;
        text-align: center;
    }

    h2 {
        color: #4CAF50;
        text-align: center;
    }

    table {
        font-size: 18px;
        /* text-align: left; */
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    a {
        font-size: 18px;
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    td>i {
        font-size: 20px;
        color: black;
    }
</style>

<body>
    <div class="container">
        <table>
            <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Age</th>
                <th>Username</th>
                <th>Passward</th>
            </tr>
            <tr>
                <td><i class="ri-user-fill"></i></td>
                <td><?php echo $_SESSION['name']; ?></td>
                <td><?php echo $_SESSION['age']; ?></td>
                <td><?php echo $_SESSION['username']; ?></td>
                <td><?php echo $_SESSION['password']; ?></td>
            </tr>
        </table>
        <a href="afterLogin.php" class="backLink">Go Back</a>
    </div>
</body>

</html>