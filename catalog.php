<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>KitchenWelp Catalog - Maxwell Schrader-Grace</title>
        <link rel="stylesheet" type="text/css" href="style/reset.css">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <?

            session_start();

              include('../../../../connection/01-connection_script.php');



                $select_query = "SELECT name, itemDescription, productImage, category, stock, cost, price, productID FROM products";
                $select_result = $mysqli->query($select_query);

                $product = null;

            ?>
    </head>
  <body>
    <header>
      <?php include('header.php'); ?>
    </header>

<div class="content_section">
  <!--<table>
      <tr>
        <td>Name</td>
        <td>Image</td>
        <td>Descrition</td>
        <td>Price</td>
      </tr>


      <?
/*
        while($row = $select_result->fetch_object()) {
              print "<tr>";

                    print "<td class=\"product_name\">".$row->name."</td>";
                    print "<td class=\"#\"> <img src=".$row->productImage." class=\"productImage\" alt=\"error\"></td>";
                    print "<td>".$row->itemDescription."</td>";
                    print "<td class=\"product_price\">".$row->price."</td>";

              print "</tr>";
            }
*/
          ?>
        </table> -->
        <?

        /*  while($row = $select_result->fetch_object()) {
                print "<div class=\"product_box\" name=\"product\">";

                print "<img src=".$row->productImage." class=\"productImage\" alt=\"error\">";

                print "<div class=\"product_text box\">";
                print "<p class=\"product_name\">".$row->name."</p>";
                print "<br>";
                print "<p class=\"product_price\"> \$".$row->price."</p>";
                print "<br>";
                print "<p >".$row->itemDescription."</p>";
                print "</div>";
                print
                print "<button type=\"submit\" class=\"add_to_cart\">Add To Cart</button>";
                print "</div>";
              }  */




              $select_product_query = "SELECT name, itemDescription, productImage, category, stock, cost, price, productID
                                       FROM products
                                       WHERE name = ''
                                       ";
              $select_product_result = $mysqli->query($select_product_query);


/* if user clicks add to cart form is submitted */

            if(isset($_POST['addtocart'])){

            /*  array_push($_SESSION['cart'], $_POST['product_selector']); */
              $_SESSION['cart'] = array();
              $_SESSION['cart'][] = $_POST['product_selector'];

              /* setcookie("cartCookie", $_SESSION['cart'], time() + 3600); */
            }


              while($row = $select_result->fetch_object()) {


                $product = "

                  <div class=\"product_box\">
                  <img src=".$row->productImage." class=\"productImage\" alt=\"error\">
                  <div class=\"product_text box\">
                  <p class=\"product_name\">".$row->name."</p>
                  <br>
                  <p class=\"product_price\"> \$".$row->price."</p>
                  <br>
                  <p>$row->itemDescription</p>
                  <img src=\"images/stars.png\" class=\"stars\" alt=\"error\">
                  </div>

                  <form class=\"product_form\" action=\"catalog.php\" method=\"post\">
                  <input type=\"submit\" class=\"add_to_cart\" name=\"addtocart\" value=\"Add to Cart\" />
                  <input type='hidden' name='product_selector' value='$row->productID'/>
                  </form>
                  </div>

                      ";



                      echo $product;




              }


              $contents = implode(" ", $_SESSION['cart']);

              print_r($contents);



            ?>

</div>
  <footer>
    <?php include('footer.php'); ?>
  </footer>
</body>
</html>
