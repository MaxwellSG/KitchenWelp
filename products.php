<!DOCTYPE html>
<html lang="en">
  <body>
    <head>
        <meta charset="utf-8">
        <title>Products</title>
        <link rel="stylesheet" type="text/css" href="style/reset.css">
        <link rel="stylesheet" type="text/css" href="style/stylesheet.css">

        <?

            session_start();

              include('../../../connection/01-connection_script.php');



                $select_query = "SELECT name, itemDescription, productImage, category, stock, cost, price, productID FROM products";
                $select_result = $mysqli->query($select_query);



            ?>
    </head>
    <header>


    </header>
    <table>
        <tr>
          <td>Name</td>
          <td>Description</td>
          <td>Image</td>
          <td>Category</td>
          <td>Stock</td>
          <td>Cost</td>
          <td>Price</td>
          <td>ID</td>
        </tr>


        <?

          while($row = $select_result->fetch_object()) {
                print "<tr>";

                      print "<td>".$row->name."</td>";
                      print "<td>".$row->itemDescription."</td>";
                        print "<td class=\"#\"> <img src=".$row->productImage." class=\"image\" alt=\"error\"></td>";
                      print "<td>".$row->category."</td>";
                      print "<td>".$row->stock."</td>";
                      print "<td>".$row->cost."</td>";
                      print "<td>".$row->price."</td>";
                      print "<td>".$row->productID."</td>";

                print "</tr>";
              }

            ?>
          </table>

    <footer>

    </footer>
  </body>
</html>
<? $mysqli->close(); ?>
