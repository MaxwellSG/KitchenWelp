<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>KitchenWelp Home - Maxwell Schrader-Grace</title>
        <link rel="stylesheet" type="text/css" href="style/reset.css">
        <link rel="stylesheet" type="text/css" href="style/style.css">

        <?

            session_start();

              include('../../../../connection/01-connection_script.php');



                $select_query = "SELECT name, itemDescription, productImage, category, stock, cost, price, productID FROM products
                                  WHERE name = 'blender' ";
                $select_result = $mysqli->query($select_query);



            ?>
    </head>
    <body>
    <header>
      <?php include('header.php'); ?>
    </header>
    <div class="home_content_section">
      <div class="featured_image">
        <img src="images/header.svg" alt="header">
      </div>
      <div>

      <?



      while($row = $select_result->fetch_object()) {


        $featured_product = "
          <fieldset class=\"featured_product_box\">
          <legend style=\"font-size:30px;padding: 5px;\"> Featured Item </legend>
          <div class=\"product\">
          <img src=".$row->productImage." class=\"productImage\" alt=\"error\">
          <div class=\"product_text box\">
          <p class=\"product_name\">".$row->name."</p>
          <br>
          <p class=\"product_price\"> \$".$row->price."</p>
          <br>
          <p>$row->itemDescription</p>
          </div>
          <form class=\"product_form\" action=\"catalog.php\" method=\"post\">
          <input type=\"submit\" class=\"add_to_cart\" name=\"featured_add_to_cart\" value=\"Add to Cart\" />
          </form>
          </div>
          </fieldset>

              ";
            }
            echo $featured_product;



      ?>

      <p id="home_description">
        KitchenWelp is your top place to shop for home goods. We house a variety of stainless steel appliances, with a wide range of color choices.
        Our upscale kitchen accessories are sure to satisfy everyone.
        Things like kitchen utensils, cutlery, towels, and other home goods.
        We have quality and long lasting products that you can trust. We have all of the essentials that you could possibly need for a house
        party on short notice. Our overnight and next day shipping is sure to satisfy your needs. We strive to get products to you as quickly as possible.
        As an American brand with a strong focus on quality and customer satisfaction we are always keeping up with the latest trends to bring you the newest and
        current products of this year. We work hard to make sure that we bring you the lowest prices while ensuring a sturdy product. Our home appliances come with
        strong warranties.
      </p>
      </div>

      <div class="social_media">
        <div class="social_media_images">
        <img src="https://dummyimage.com/200x200/e6e3e6/000000" alt="#">
        <img src="https://dummyimage.com/200x200/e6e3e6/000000" alt="#">
        <img src="https://dummyimage.com/200x200/e6e3e6/000000" alt="#">
        <img src="https://dummyimage.com/200x200/e6e3e6/000000" alt="#">
        </div>
      </div>
    </div>
    <footer>
      <?php include('footer.php'); ?>
    </footer>
  </body>
</html>
