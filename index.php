<!doctype html>
<html lang="en">
  <head>
    <title>Masuk</title>
    <link rel="stylesheet" href="masuk.css" type="text/css">
  </head>

  <body>
    <div class="container">
        <div class="img">
            <img src="image/login.svg">
        </div>

        <div class="login-container">
            <form action="proses login.php" method="post">
            <h3>Selamat Datang di Triarti!</h3><br>     
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="login" value="Masuk"></td>
                </tr>
            </table>
            </form>
        </div>
    </div>
  </body>
</html>