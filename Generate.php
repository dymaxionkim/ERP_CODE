<html>
<body>

<?php
  exec("ListDB.jl", $list);
  echo $list
  echo "<br/>";
  echo $_GET["PartName"];
?>


</body>
</html>
