<html>
<head></head>
<body>
<table>
    <tr>
        <th>Product</th>
        <th>rate</th>
    </tr>
    <?php
        $con=mysqli_connect("localhost","root","","bill");
        $query="select * from itembill";
        $res=mysqli_query($con,$query);
        echo "<table border='1'><tr>";
        echo "<th>Product</th><th>Rate</th></tr>"
        if(mysqli_num_rows($res)>0)
        {
            while($row=mysqli_fetch_array($res))
              {
                echo "<tr><td>", $row["item"],"</td>
                <td>",$row["rate"],"</td></tr>"
     
        }}
    ?>

    <tr>
         <th>Total</th>
    <?php
       $con=mysqli_connect("localhost","root","","bill");
        $query="select sum(rate) as total from itembill";
        $res=mysqli_query($con,$query);
        $f=mysqli_fetch_array($res);
    ?>
         <td><?php echo $f["total"]?></td>
    </tr>
</table>
</body>
</html>