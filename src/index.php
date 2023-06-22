<h3>Original array</h3>

<?php

$arr = require "config/data.php";
echo "<pre>";
print_r($arr);
echo "</pre>";
?>
<table border="1">
  <thead>
    <tr>
      <th>Language</th>
      <th>First Release</th>
      <th>Latest Release</th>
      <th>Designed By</th>
      <th>Extension</th>
      <th>Typing Discipline</th>
      <th>license</th>
    </tr>
  </thead>
  <?php

  foreach ($arr as $language => $details) {
    echo "<tr>";
    echo "<td> $language </td>";
    echo "<td> $details[first_release]</td> <td> $details[latest_release] </td> <td> $details[designed_by]</td>";
    foreach ($details['description'] as $key => $value) {
      echo "<td> $value </td>";
    }
    echo "</tr>";
  }
  ?>
</table>

</table>