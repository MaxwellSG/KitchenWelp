<!DOCTYPE html>
<html lang="en">
  <body>
    <head>
        <meta charset="utf-8">
        <title>KitchenWelp Admin Login - Maxwell Schrader-Grace</title>
        <link rel="stylesheet" type="text/css" href="style/reset.css">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <?

            session_start();

              include('../../../../connection/01-connection_script.php');



              if(isset($_POST['submit']) && (!isset($_SESSION['logged_in']))) {

                  $select_query = "SELECT userName, password, firstName, lastName, accessLevel, email, address, userID FROM kitchenUsers";
                  $select_result = $mysqli->query($select_query);
                  if($mysqli->error) {
                      print "Select query error!  Message: ".$mysqli->error;
                  }

                  while($row = $select_result->fetch_object()) {
                      if ((($_POST['username']) == ($row->userName)) && (($_POST['password'])) == ($row->password)) {
                          $_SESSION['logged_in'] = true;
                          $_SESSION['logged_in_user'] = $row->userName;
                          $_SESSION['logged_in_user_id'] = $row->userID;
                          $_SESSION['logged_in_user_access'] = $row->accessLevel;
                          $_SESSION['logged_in_first_name'] = $row->firstName;
                          $_SESSION['logged_in_last_name'] = $row->lastName;

                      } else {
                          // do nothing
                      }
                  }
              }

              if (isset($_SESSION['logged_in'])) {
                  header("Location: home.php");

              }



            ?>
    </head>
    <header>
      <?php include('header.php'); ?>
    </header>

    <div class="content_section_admin_login">
      <form method="post" action="#">
          <label for="username" id="user_login_label">Username</label>
          <input name="username" id="username" type="text" /><br />
          <label for="password" id="user_password_label">Password</label>
          <input name="password" id="password" type="password" /><br />
          <input name="submit" id="submit_login" type="submit" value="Login" />
          <button name="register" id="submit_register" type="submit"><a href="register.php"> Register </a> </button>
        </form>
        <!--<p> test with Username: admin Password: admin </p>
        <p> test with Username: client Password: client </p> -->
      </div>

    <footer>
      <?php include('footer.php'); ?>
      <?

      $mysqli->close();
      ?>
    </footer>
  </body>
  </html>
