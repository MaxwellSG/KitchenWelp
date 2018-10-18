<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>KitchenWelp Admin Login - Maxwell Schrader-Grace</title>
        <link rel="stylesheet" type="text/css" href="style/reset.css">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <?

        session_start();

          include('../../../../connection/01-connection_script.php');

          ?>
    </head>
    <body>
    <header>
      <?php include('header.php'); ?>
    </header>
    <!--this displays if the user has not logged in to their account yet -->
    <div class="client_content_section">
      <?
        if(!isset($_SESSION['logged_in'])){
          echo "<div class=\"please_login\">";
          echo "<p>";
          echo "You are not currently logged in.";
          echo "</p>";
          echo "<p>";
          echo "please click";
          echo "<a href=\"admin.php\"> Login </a>";
          echo "to visit this page";
          echo "</p>";
          echo "</div>";
        }
        else if(isset($_SESSION['logged_in'])){
        if($_SESSION['logged_in'] = true && $_SESSION['logged_in_user_access'] === "client"){
      ?>
    </div>
      <!-- all content available to Clients -->
      <div class="user_data">
        <div class="user_data_grid">
          <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" alt="user profile" class="user_profile_image">
        </div>
      <div class="profile_data">
      <div class="user_data_grid">
        <ul class="user_profile_information">
          <h1> Your Profile Information </h1>
          <li>
            User Name: <? echo $_SESSION['logged_in_user']; ?>
          </li>
          <li>
            Access Level: <? echo $_SESSION['logged_in_user_access']; ?>
          </li>
          <li>
            First Name: <? echo $_SESSION['logged_in_first_name']; ?>
          </li>
          <li>
            Last Name: <? echo $_SESSION['logged_in_last_name']; ?>
          </li>
        </ul>
      </div>
      <div class="shipping_information user_data_grid">
        <h1> Shipping information </h1>
          <ul>
            <li>
              Address:
            </li>
            <li>
              Contact Info:
            </li>
            <li>
              Payment Info:
            </li>
          </ul>
      </div>
    </div>
  </div>
</div>


      <div class="purchase_history">
        <h1> Purchase History </h1>
        <?
        $select_query = "SELECT name, itemDescription, productImage, category, stock, cost, price, productID FROM products
                         WHERE name = 'sponge' ";
        $select_result = $mysqli->query($select_query);
        while($row = $select_result->fetch_object()) {
          $product = "
            <div name=\"product\">
            <img src=".$row->productImage." class=\"productImage\" alt=\"error\">
            <div class=\"product_text box\">
            <p class=\"product_name\">".$row->name."</p>
            <br>
            <p class=\"product_price\"> \$".$row->price."</p>
            <br>
            <p>$row->itemDescription</p>
            </div>
            </div>
                ";
              }
        ?>
        <ul>
          <li>
            <? echo $product; ?>
          </li>
          <li>
            <? echo $product; ?>
          </li>
          <li>
            <? echo $product; ?>
          </li>
          <li>
            <? echo $product; ?>
          </li>
          <li>
            <? echo $product; ?>
          </li>
          <li>
            <? echo $product; ?>
          </li>
        </ul>
      </div>
      <?
      /* this closes all logged in access for client */
        }
      /* this closes all logged in access for client */
      else if(($_SESSION['logged_in'] = true && $_SESSION['logged_in_user_access'] === "Administration")){
      ?>
      <!-- all content available to Administration -->
      <div class="user_data">
        <div class="user_data_grid">
          <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" alt="user profile" class="user_profile_image">
        </div>
      <div class="profile_data">
        <div class="user_data_grid">
          <ul class="user_profile_information">
            <h1> Your Profile Information </h1>
            <li>
              User Name: <? echo $_SESSION['logged_in_user']; ?>
            </li>
            <li>
              Access Level: <? echo $_SESSION['logged_in_user_access']; ?>
            </li>
            <li>
              First Name: <? echo $_SESSION['logged_in_first_name']; ?>
            </li>
            <li>
              Last Name: <? echo $_SESSION['logged_in_last_name']; ?>
            </li>
          </ul>
        </div>
        <div class="shipping_information user_data_grid">
          <h1> Shipping information </h1>
          <ul>
            <li>
              Address:
            </li>
            <li>
              Contact Info:
            </li>
            <li>
              Payment Info:
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

    <div class="orders">
      <h1> Orders to fill: </h1>
      <div>
      <h2> Address: </h2>
        <p>
          John Doe<br>
          555 James St<br>
          FL, 33333
        </p>
      </div>
      <div>
      <h2> Items: </h2>
        <p>

        </p>
        <button class="print_order"> Print order Form </button>
      </div>

    </div>

      <?
      /* this closes all administrator access*/
        }
      }
      ?>

    <footer>
      <?php include('footer.php'); ?>
      <?

      $mysqli->close();
      ?>
    </footer>
  </body>
</html>
