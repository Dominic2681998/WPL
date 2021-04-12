<html>
<head></head>
<body>
<table>
 <tr>
   <th>Item code</th>
   <th>Item Name</th>
   <th>Item Type</th>
   <th>Available</th>
   <th>Expiary Date</th>
 </tr>
 <?php
   $con=mysqli_connect("localhost","root","","bill");
   $query="select * from item";
   $res=mysqli_query($con,$query);
   while($row=mysqli_fetch_array($res))
   {
     echo "<tr><td>",$row["item_code"],"</td><td>", $row["item_name"],"</td> <td>",$row["type"],"</td><td>",
     $row["available"],"</td><td>",$row["expiary_date"],"</td></tr>";
 
    }
    ?>
</table>
</body>
</html>
  