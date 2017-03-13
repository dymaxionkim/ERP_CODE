<!DOCTYPE html>
<html>
<head>
  <title>ERP_CODE</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <img src="http://hubright.cafe24.com/wp-content/uploads/2017/01/hubright_logo_sticky.png">
  <h1>List</h1>

  <nav>
    <ol>
      <li><a href="Generate.php">Generate</a></li>
      <li><a href="List.php">List<a/></li>
    </ol>
  </nav>

  <?php
    exec("julia ListDB.jl",$list);
    $csv = array_map('str_getcsv', file('ListDB.csv'));

    function html_table($data = array())
    {
      $rows = array();
      foreach ($data as $row) {
        $cells = array();
        foreach ($row as $cell) {
          $cells[] = "<td>{$cell}</td>";
          }
      $rows[] = "<tr>" . implode('', $cells) . "</tr>";
    }
    return "<table class='ex1'>" . implode('', $rows) . "</table>";
    }

    echo html_table($csv);

  ?>

</body>
</html>
