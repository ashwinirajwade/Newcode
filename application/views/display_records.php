<!DOCTYPE html>
<html>
<head>
<title>Display Records</title>
</head>

<body>

<p><h1>Codeigniter Example Demo!!!</h1></p>
<p><h2>Dispalying Data From Database</h2></p>    
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->user_name."</td>";
  echo "<td>".$row->user_email."</td>";
  echo "<td>".$row->user_mobile."</td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>

</body>
</html>


