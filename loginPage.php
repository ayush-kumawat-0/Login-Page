<?php
session_start();
$error = '';
if(isset($_SESSION['error'])){
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="loginStyle.css">
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
        rel="stylesheet" />
</head>

<body>
    <section class="main">
        <div class="container">
            <h1>Login</h1>
            <form action="afterLogin.php" method="post">
                <!-- <input type="text" name="name" placeholder="Name" required>
                <input type="text" name="age" placeholder="Age" required> -->
                <div class="inputBox">
                    <input type="text" name="username" placeholder="Username" required>
                    <i class="ri-user-fill"></i>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" placeholder="Password" required id="myInput">
                    <i class="ri-eye-off-line passw"></i>
                </div>

                <?php if ($error): ?>
                    <p style="color:red;"><?php echo $error; ?></p>
                <?php endif; ?>

                <div class="bottom">
                    <div>
                        <input type="checkbox" name="remember" id="remember">
                        <label for="">Remember me</label>
                    </div>
                    <a href="">Forgot password?</a>
                </div>
                <!-- <input type="hidden" name="Submit" value="1"> -->
                <button type="submit" name="submit" value="1">Login</button>
            </form>
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </section>
</body>
<script>
    // function myFunction() {
    var x = document.getElementById("myInput");
    var img = document.querySelector(".passw");
    img.addEventListener("click", function() {
        if (x.type === "password") {
            x.type = "text";
            img.classList.remove("ri-eye-line");
            img.classList.add("ri-eye-off-line");
        } else {
            x.type = "password";
            img.classList.remove("ri-eye-off-line");
            img.classList.add("ri-eye-line");
        }
    });
</script>

</html>