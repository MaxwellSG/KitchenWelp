<!-- Desktop version -->
<div class="nav-menu">
  <ul>
    <li id="logo">
      <img src="images/kitchenwelp_logo.png" alt="KitchenWelp" class="logo">
    </li>
    <li id="contact_info">
      Phone: (555) 555-5555 <br>
      Email: KitchenWelp@KitchenWelp.com
    </li>
    <li>
      <a href="home.php">Home</a>
    </li>
    <li>
      <a href="catalog.php">Catalog</a>
    </li>
    <li>
      <a href="client.php">Client</a>
    </li>
    <li>
      <?


      if(!isset($_SESSION['logged_in'])){
          echo "<a href=\"admin.php\" class=\"login_button\">Login</a>";
          }
         else if($_SESSION['logged_in'] = true){
           echo "<a href=\"logout.php\" style=\"color:#FF5C5C;\">Logout</a>";
         }

      ?>
    </li>
    <li id="search">
      <form action="#">

          <!--<button class="login">Login</button>-->
          <!--<button class="sign-up">Sign Up</button>-->

        <input class="search-input" type="text" placeholder="Search">
        <button class="search-button" type="submit">Search</button>
      </form>
    </li>
    <li>
      <a href="cart.php"><img src="images/ShoppingCart.png" alt="shooping cart" class="shopping_cart"></a>
    </li>
  </ul>
</div>
<!-- Desktop version -->
