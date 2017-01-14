<!DOCTYPE HTML>
<html>
<head>
  <title>DuczBase</title>
  <!-- Link CSS and JS here -->
  <link rel="stylesheet" type="text/css" href="style_main.css">
  <script src="../js/manager_order_scripts.js"></script> 
  <!--                      -->
</head>
<body>

  <table id="logout_options_table">
    <tr>
     <td style="padding: 15px"><form id="options">Options</form></td>
     <td style="padding: 15px"><form id="logout">Log out</form></td>
    </tr>
  </table>

  <div>
    <h1>Spock, welcome to</h1><br>    <!--TU POWINNO BYĆ IMIĘ ZIOMKA/-->
    <div id="logo_big">DuczBase</div>
  </div>

  <div id="main_box">
    <ul>
      <li><a href="manager_packers.php">Packers</a></li>
      <li><a href="manager_shipments.php">Shipments</a></li>
      <li><a href="manager_products.php">Products</a></li>
      <li><a class="active" href="manager_orders.php">Orders</a></li>
    </ul>

    <div id="left_box">
      <dev id="display_element" name='1' onclick="show_content(this)">Order 1</dev>
      <dev id="display_element" name='2' onclick="show_content(this)">Order 2</dev>
      <dev id="display_element" name='3' onclick="show_content(this)">Order 3</dev>
    </div>

    <div id="right_box">
      <h2>Order 1</h2>
      <table class="small_table">
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>In stock</th>
          <th>Add</th>
        </tr>
        <tr>
          <td>Banan</td>
          <td>3</td>
          <td>43</td>
          <td><input type="in_table" name="1" placeholder="ID"></td>
        </tr>
        <tr>
          <td>Czystek</td>
          <td>9</td>
          <td>132</td>
          <td><input type="in_table" name="2" placeholder="ID"></td>
        </tr>
        <tr>
          <td>Pumeks</td>
          <td>2</td>
          <td>122</td>
          <td><input type="in_table" name="3" placeholder="ID"></td>
        </tr>
      </table>
      <table class="small_table">
        <tr>
          <td><button id="button_bottom">Create shipment</button></td>
        </tr>
      </table>
    </div>

  </div>

</body>
</html>