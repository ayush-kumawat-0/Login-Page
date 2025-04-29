<?php
// session_start();
// if (isset($_POST['submit'])) 
// {
// $_SESSION['name'] = $_POST['name'];
// $_SESSION['age'] = $_POST['age'];
// $_SESSION['username'] = $_POST['username'];
// $_SESSION['password'] = $_POST['password'];
// }

?>

<?php
// session_start();

// if (!isset($_SESSION['username'])) {
//     header("Location: loginPage.php");
//     exit();
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save'])) {
//     $_SESSION['name'] = $_POST['name'];
//     $_SESSION['age'] = $_POST['age'];
//     $_SESSION['username'] = $_POST['username'];
//     $_SESSION['password'] = $_POST['password'];

//     $message = "Details updated successfully!";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    .editBtn {
        background-color: rgb(0, 100, 255);
        color: white;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        font-size: 1.2rem;
        font-weight: normal;
        margin: 1rem 1rem 0 0;
        padding: 10px 15px;

    }

    .editBtn:hover {
        background-color: rgb(21, 98, 180);
        color: rgb(255, 255, 255);
    }

    .backLink {
        display: block;
        text-align: center;
        margin-top: 20px;
        color: #007bff;
        text-decoration: none;
        font-size: 18px;
    }

    .backLink:hover {
        text-decoration: underline;
    }

    input[type="text"],
    input[type="password"] {
    width: 40%;
    padding: 5px;
    margin: 2px 0;
    border: 1px solid #9e9e9e;
    border-radius: 4px;
    /* background-color: transparent; */
    backdrop-filter: blur(20px);
    /* color: #F1F1F1; */
    font-size: 15px;
    font-weight: 400;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
    border-color: black;
    outline: none;
    }
    .btn-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
        margin-top: 20px;
        margin-right: 5vw;
    }
</style>

<body>
    <div class="container">
        <h1>Welcome to the Edit Page</h1>
        <h2>Edit User Details</h2>
        <form action="afterLogin.php" method="POST">
        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="" placeholder="<?php echo $_SESSION['name']; ?>"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age" value="" placeholder="<?php echo $_SESSION['age']; ?>"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="" placeholder="<?php echo $_SESSION['username']; ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="" placeholder="<?php echo $_SESSION['password']; ?>"></td>
            </tr>

        </table>

        <div class="btn-container">
            <div class="mofify">
                <button type="submit" class="editBtn">Save Changes</button>
                <button type="" class="editBtn">Preview</button>
            </div>
            <div class="back">
                <a href="afterLogin.php" class="backLink">Go Back</a>
            </div>
        </div>
        </form>
    </div>

</body>

</html>