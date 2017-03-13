<!DOCTYPE html>
<html>
<head>
  <title>ERP_CODE</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <img src="http://hubright.cafe24.com/wp-content/uploads/2017/01/hubright_logo_sticky.png">
  <h1>Generate</h1>

  <nav>
    <ol>
      <li><a href="Generate.php">Generate</a></li>
      <li><a href="List.php">List<a/></li>
    </ol>
  </nav>

  <?php echo $_GET["PartName"]; ?>
  <?php echo '<br/>'; ?>
  <?php echo '565885785787'; ?>

  <form method="post" action="Generate3.php">
    <input type="submit" value="Save into DB">
  </form>

</body>
</html>
