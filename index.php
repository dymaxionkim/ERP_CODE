<!DOCTYPE html>
<html>
<head>
  <title>ERP_CODE</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <header>
    <img src="http://hubright.cafe24.com/wp-content/uploads/2017/01/hubright_logo_sticky.png">
    <h1>ERP_CODE for DJDMP</h1>
  </header>

  <nav>
    <ol>
      <?php echo file_get_contents("nav.php"); ?>
    </ol>
  </nav>

  <article>
    <?php if ( empty($_GET['id']) == false ) {
      echo file_get_contents($_GET['id'].".php");
    } ?>
  </article>

</body>
</html>
