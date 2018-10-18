<!DOCTYPE html>
<html lang="en">
  <body>
    <head>
        <meta charset="utf-8">
        <title>KitchenWelp Register - Maxwell Schrader-Grace</title>
        <link rel="stylesheet" type="text/css" href="style/reset.css">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <?

            session_start();

              include('../../../../connection/01-connection_script.php');













/* sent user info to database */
                    $errors= array();

                    if(isset($_POST['register'])) {
                          $userName = $_POST['username'];
                          $password = $_POST['password'];
                          $passwordConfirm = $_POST['passwordConfirm'];
                          $firstName = $_POST['firstname'];
                          $lastName = $_POST['lastname'];
                          $accessLevel = $_POST['access'];
                          $email = $_POST['email'];
                          $address = $_POST['address'];

                          if(empty($username)){
                            array_push($errors,"Username is required");
                          }
                          if(empty($email)){
                            array_push($errors,"Email is required");
                          }
                          if(empty($password)){
                            array_push($errors,"Password is required");
                          }
                          if($password!=$passwordConfirm){
                            array_push($errors,"Passwords did not match");
                          }

                          $insert_user_query = "INSERT INTO kitchenUsers(userName, password, firstName, lastName, accessLevel, email, address, userID)
                                                VALUES ('$userName','$password','$firstName','$lastName','$accessLevel','$email','$address', NULL)";
                          $send_user_query = $mysqli->query($insert_user_query);
                          if (!$insert_user_query) {
                              die('Invalid query: ' . mysql_error());
                            }
                          else{ /*echo "Success"; */ }
                        }





        ?>
    </head>
    <header>
      <?php  include('header.php');  ?>
    </header>
    <div class="register_content">

    <form method="post" action="#" class="register">
                <div>
                  <input type="hidden" name="access" value="client">
                </div>
                <div>
                  <input type="hidden" name="address" value=" ">
                </div>
                <?php
                if(isset($_POST['register'])) {
                  if(!isset($_POST['username'])){
                      print "<p style=\"color:red;\">";
                      print "Username is required";
                      print "</p>";
                  }
                }
                    ?>
                <div>
                    <input class='register_form' type="text" name="username"  placeholder="User Name">
                </div>
                <div>
                    <input class='register_form' type="text" name="firstname"  placeholder="First Name">
                </div>
                <div>
                    <input class='register_form' type="text" name="lastname"  placeholder="Last Name">
                </div>
                <div>
                    <input class='register_form' type="email" name="email"  placeholder="Email Address">
                </div>
                <div>
                    <div>
                        <div>
                            <input class='register_form' type="password" name="password"  placeholder="Password">
                        </div>
                    </div>
                    <div>
                        <div>
                            <input class='register_form' type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Confirm Password">
                        </div>
                    </div>
                </div>

                <div>
                    <div><input class='register_form_button' type="submit" name="register" value="Register"></div>
                </div>
            </form>
            <?/* var_dump( implode( ',', $errors ) );*/?>
    </div>
    <footer>
      <?php include('footer.php');?>
      <?

      $mysqli->close();
      ?>
    </footer>
  </body>
</html>
