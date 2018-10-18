<!DOCTYPE html>
<html lang="en">
  <body>
    <head>
        <meta charset="utf-8">
        <title>KitchenWelp Cart - Maxwell Schrader-Grace</title>
        <link rel="stylesheet" type="text/css" href="style/reset.css">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <?

            session_start();

            include('../../../../connection/01-connection_script.php');



            $select_query = "SELECT name, itemDescription, productImage, category, stock, cost, price, productID FROM products";
            $select_result = $mysqli->query($select_query);



            ?>
    </head>
    <header>
      <?php include('header.php'); ?>
    </header>

    <div class="content_section">
      <fieldset class="cart">
        <legend>Your Cart</legend>
        <p>Click the Checkout button bellow to submit your shipping information and complete your order.</p>
        <div>
            <?
            $contents = implode(" ", $_SESSION['cart']);
            print_r($contents);
            ?>
        </div>
        <?php include('checkoutform.php'); ?>
        <button class="checkout" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Checkout</button>
      </fieldset>
    </div>

    <footer>
      <?php include('footer.php'); ?>
    </footer>
  </body>
  </html>
