
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="admin-style.css">
</head>
<body>
    <div class="search-form admin-login">
        <h2 style="text-align: center;">Admin Login</h2>

        <form class="" action="admin_login_process.php" method="post">
            <div class="imgcontainer">
              <img src="https://queenybd.com/wp-content/uploads/2023/09/Queeny-Pink-150x86.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
              <label for="username"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="username" required>

              <label for="password"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" required>
                
              <input class="searchbtn" type="submit" value="Login">
            </div>
        </form>

    </div>

</body>
</html>
