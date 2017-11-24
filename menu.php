<!DOCTYPE html>
<html>
<meta>
</meta>

<div id="container">
<head>
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" type="text/css" href="menu.css">
  <title>MuleMunchies</title>
  <div id="header">
  <div id="logo">
     MuleMunchies
  </div>
  <div id="navbar">
    <ul>
      <a href="index.php"><li>Home</li></a>
      <a href="about.html"><li>About</li></a>
      <a href="menu.html"><li>Menu</li></a>
      <a href="cart.html"><li>Cart</li></a>
    </ul>
  </div>
</div>
</head>
<body>
  <div id="content">

<!-- Menu************************ -->
    <div id="art">
      <h1>Menu</h1>
      <table>
        <tr>
        <th>Meal</th>
        <th>ID</th>
        <th>Item</th>
        <th>Price</th>
      </tr>
      <?php
      require 'menuconnect.php';
      $conn =Connect();
      $sql = 'SELECT * FROM menu';
      $table = $conn->query($sql);
      if($table->num_rows > 0) {
        while($row = $table->fetch_assoc()){
          ?>
          <tr>
            <td>
              <?php echo $row['meal']; ?>
            </td>
            <td>
              <?php echo $row['idnum']; ?>
            </td>
            <td>
              <?php echo $row['item']; ?>
            </td>
            <td>
              <?php echo $row['price']; ?>
            </td>
          </tr>
          <?php
        }
      }
else {
  ?>
  <tr>
    <th colspan="2">No Data</th>
    <?php
}
?>
</table>


    </div>
<!-- Cart**************************** -->
    <div id="text">

    </div>
<!-- ************************ -->
    <div id="footer">
      <div id="year">
        <i>MuleMunchies - 2017</i>
      </div>
      <div id="navbarbottom">
        <ul>
          <a href="https://www.colby.edu/"><li>Colby</li></a>
          <a href="https://www.twitter.com/"><li>Twitter</li></a>
          <a href="contact.html"><li>Contact</li></a>
        </ul>
      </div>
    </div>
  </div>
</body>
</div>
</html>
