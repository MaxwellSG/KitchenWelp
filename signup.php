<?

    session_start();

      include('../../../connection/01-connection_script.php');


          if(isset($_POST['submit'])) {
            if($_POST['firstname'] && $_POST['lastname'] && $_POST['username'] && $_POST['password'] && $_POST['confirm_password'] = null){

            }else if($_POST['firstname'] && $_POST['lastname'] && $_POST['username'] && $_POST['password'] && $_POST['confirm'] != null){
              $insert_new_user = "INSERT INTO users(user_name, password, first_name, last_name)
                                       VALUES ('".$_POST['username']."', '".$_POST['password']."', '".$_POST['firstname']."', '".$_POST['lastname']."')";
              $mysqli->query($insert_new_user);

              header("Location: index.html");
          }
        }
    ?>
    <div>
      <form method="post" action="#" id="signup">
          <label for="firstname">First Name</label>
          <input name="firstname" type="text" /><br />

          <label for="lastname">Last Name</label>
          <input name="lastname" type="text" /><br />

          <label for="username">Username</label>
          <input name="username" type="text" /><br />

          <label for="password">Password</label>
          <input name="password" type="password" /><br />

          <label for="confirm">Confirm Password</label>
          <input name="confirm" type="password" /><br />

          <input name="submit" type="submit" value="Sign Up" />
        </form>
      </div>
    <?
     $mysqli->close();
    ?>
