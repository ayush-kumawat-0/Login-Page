<?php
session_start();
// if (isset($_POST['submit'])) 
// {
// $_SESSION['name'] = $_POST['name'];
// $_SESSION['age'] = $_POST['age'];
// $_SESSION['username'] = $_POST['username'];
// $_SESSION['password'] = $_POST['password'];
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
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
        position: relative;
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

    .pass {
        position: relative;
    }

    .pass i {
        position: absolute;
        margin: 10px 0;
        left: 56%;
        top: 10%;
        font-size: 18px;
        cursor: pointer;
        color: black;
    }

    .prevBtn {
        border: 2px solid #ccc;
        position: fixed;
        top: 50%;
        left: 50%;
        height: 60vh;
        transform: translate(-50%, -50%);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        flex-direction: column;
        align-items: start;
        padding: 20px;
        border-radius: 8px;
        width: 400px;
        background-color: #e6e6e6;
        color: black;
    }

    .dis {
        display: none;
    }

    .prevh {
        margin: 0;
        padding: 10px;
        width: 100%;
        border-bottom: 2px solid #777;
        text-align: center;
        margin-bottom: 4rem;

    }

    .content {
        margin-bottom: 4rem;
    }

    .close {
        background-color: #007bff;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        display: block;
        margin: 15px auto 0;
        transition: background-color 0.3s;
    }

    .close:hover {
        background-color: #0056b3;
    }

</style>

<body>
    <div class="container">
        <div class="prevBtn dis">
            <h1 class="prevh">Preview Details</h1>
            <div class="content">
                <h3 id="prevName">Name: </h3>
                <h3 id="prevAge">Age:</h3>
                <h3 id="prevUsername">Username:</h3>
                <h3 id="prevPassword">Password:</h3>
            </div>
            <a href="afterLogin.php"><button class="close">Close</button></a>
        </div>
        <h1>Welcome to the Edit Page</h1>
        <h2>Edit User Details</h2>
        <form action="saveChanges.php" method="POST">
            <table>
                <tr>
                    <th>Field</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $_SESSION['name']; ?>"></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="text" name="age" value="<?php echo $_SESSION['age']; ?>"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" td>
                </tr>
                <tr class="pass">
                    <td>Password</td>
                    <td><input type="password" name="password" value="<?php echo $_SESSION['password']; ?> " id="myInput"><i class="ri-eye-off-line passw"></i> </td>
                </tr>

            </table>

            <div class="btn-container">
                <div class="mofify">
                    <a href="saveChange.php"><button type="submit" class="editBtn">Save Changes</button></a>
                    <button type="button" class="editBtn" id="preview">Preview</button>
                </div>
                <div class="back">
                    <a href="afterLogin.php" class="backLink">Go Back</a>
                </div>
            </div>
        </form>
    </div>

</body>
<script>
    function passFun() {
        var x = document.getElementById("myInput");
        var img = document.querySelector(".passw");
        img.addEventListener("click", function() {
            if (x.type === "password") {
                x.type = "text";
                img.classList.remove("ri-eye-off-line");
                img.classList.add("ri-eye-line");
            } else {
                x.type = "password";
                img.classList.remove("ri-eye-line");
                img.classList.add("ri-eye-off-line");
            }
        });
    }

    passFun();

    function preview() {
        let preview = document.getElementById("preview");
        let prevBtn = document.querySelector(".prevBtn");
        let close = document.querySelector(".close");
        let dis = document.querySelector(".dis");

        preview.addEventListener("click", () => {
            let name = document.querySelector('input[name="name"]').value;
            let age = document.querySelector('input[name="age"]').value;
            let username = document.querySelector('input[name="username"]').value;
            let password = document.querySelector('input[name="password"]').value;

            document.getElementById("prevName").textContent = `Name:  ${name}`;
            document.getElementById("prevAge").textContent = `Age: ${age}`;
            document.getElementById("prevUsername").textContent = `Username: ${username}`;
            document.getElementById("prevPassword").textContent = `Password: ${password}`;

            prevBtn.classList.remove("dis");
            prevBtn.style.display = "flex";
        });

        close.addEventListener("click", () => {
            prevBtn.classList.add("dis");
        });
    }

    preview();
</script>

</html>