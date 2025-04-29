<?php
session_start();

if (isset($_SESSION['username'])) {
    showWelcomePage();
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $found = false;

    $details = [
        ['name' => "Ayush Kumawat", 'age' => 20, 'username' => "ayush_123", 'password' => "ayush@123"],
        ['name' => "Aman Sharma", 'age' => 40, 'username' => "aman_123", 'password' => "aman@123"],
        ['name' => "Piyush Singh", 'age' => 35, 'username' => "piyush_123", 'password' => "piyush@123"],
        ['name' => "Ankit Soni", 'age' => 25, 'username' => "ankit_123", 'password' => "ankit@123"],
    ];

    $inputUsername = $_POST['username'] ?? '';
    $inputPassword = $_POST['password'] ?? '';

    foreach ($details as $detail) {
        if ($detail['username'] === $inputUsername && $detail['password'] === $inputPassword) {
            $_SESSION['name'] = $detail['name'];
            $_SESSION['age'] = $detail['age'];
            $_SESSION['username'] = $detail['username'];
            $_SESSION['password'] = $detail['password'];
            $found = true;
            break;
        }
    }

    if ($found) {
        showWelcomePage(); 
        exit();
    } else {
        $_SESSION['error'] = "Invalid username or password!";
        header("Location: loginPage.php");
        exit();
    }

} else {
    header("Location: loginPage.php");
    exit();
}

function showWelcomePage()
{
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

        .btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
        }

        .page2btn {
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

        .page2btn:hover {
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
    </style>

    <body>
        <div class="container">

            <h1>Welcome <?php echo $_SESSION['name'] ?> the Login Page</h1>
            <h2>Login Successful</h2>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                </tr>
                <tr>
                    <td><?php echo $_SESSION['name']; ?></td>
                    <td><?php echo $_SESSION['age']; ?></td>

                </tr>
            </table>


            <div class="btn-container">
                <!-- <div class="modify"> -->
                <a href="edit.php"><button class="page2btn">Edit</button></a>
                <a href="fullDetail.php"><button class="page2btn">Full Details</button></a>
                <a href="logout.php"><button class="page2btn">Logout</button></a>
                <!-- </div> -->
                <!-- <div class="back">
                    <a href="loginPage.html" class="backLink">Go Back</a>
                </div> -->
            </div>
        </div>
    </body>
<?php
}
?>

    </html>