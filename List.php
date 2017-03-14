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
