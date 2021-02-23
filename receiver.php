<?php
 include ("server.php");
 $sql = "SELECT * FROM donor;";
 $result = mysqli_query($db, $sql);
 $resultCheck = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receiver</title>
    </head>
    <body>
        <div class="menu">
            <a href="profile.html"> My Profile</a>
            <a href="order.html"> My orders</a>
            <a href="track.html"> Track location</a>
            <a href="request.html">Post request</a>
        </div>
        
<table>
<tr>
   <th>uname</th>
   <th>uaddress</th>
   <th>fooddetails</th>
   <th>contact</th>
</tr>
<?php 
while($row=mysqli_fetch_assoc($result) )
{    
?>
<tr>
<td><?php echo $row['uname'];?></td>
<td><?php echo $row['uaddress'];?></td>
<td><?php echo $row['fooddetails'];?></td>
<td><?php echo $row['contact'];?></td>
<td><?php
?>
<img src="<?php echo $row["uname"]; ?>" height="100" width="100"></td>
<td><form method="post" action="accept.php"><button type="submit" value="<?php echo $id; ?>" name="id" formmethod="POST">Accept</button></form>
<br>
<form method="post" action="delete.php"><button type="submit" value="<?php echo $id; ?>" name="id" formmethod="POST">Delete</button></form></td>
</tr>
<?php
}
?>
</table>
<br><br>
<a href="home.html">Back</a><br><br><br>

 
</body>
<style>
    div.menu{
        background-color: royalblue;
        overflow: auto;
        
    }
    div.menu a{
        float: right;
        display: inline-block;
        color: whitesmoke;
        text-align: center;
        padding: 17px;
        text-decoration: none;
    }
    div.menu a:hover{
        background-color: #ddd;
        color: black;
    }

</style>
</html>