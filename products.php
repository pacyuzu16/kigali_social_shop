<?php
   include('sessions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    
  section {
    margin-bottom: 20px;
  }
     footer p {
    margin: 0;
  }
  
  footer ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  footer ul li {
    display: inline;
    margin-right: 10px;
  }
  
  footer a {
    text-decoration: none;
    color: #fff;
  }
    footer {
    background-color:  #c4aa3a;
   
    color: #fff;
    padding: 10px 0;
    text-align: center;
    position:relative;
  }
    form {
    display: flex;
    flex-direction: column;
    width: 300px;
  }
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .header {
      background-color: #c4aa3a;
      color: #fff;
      padding: 0px;
      text-align: center;
    }

    .container {
      display: flex;
      justify-content: space-between;
      padding: 20px;
    }

    .main-content {
      width: 70%;
      background-color: #c4aa3a;
      padding: 20px;
      box-sizing: border-box;
    }

    .profile-section {
      width: 100%;
      background-color: #c4aa3a;
      padding: 0px;
   
      height: 100%
    }

    /* Add additional styling as needed */
    .header a {
      color: #fff;
      text-decoration: none;
      margin: 0 15px;
    }

    .header a:hover {
      border-bottom: 2px solid #fff;
    }
    .hello{
        background-color: #c4aa3a;
    }
  </style>
</head>
<body>
   <div class="hello">
  <table border="0"bgcolor="#c4aa3a">
  <tr><th width="1000px">   
    <div class="header">
      <h1>Kigali Social Shop  Online Admin System</h1>
      <nav>
        <a href="admin.php">Dashboard</a>
        <a href="users.php">All Users</a>
        <a href="buyers.php">Registered clients</a>
      
        <a href="products.php">Products List</a>
        <a href="in_carts.php">In_carts</a>
        <a href="messages.php">Messages</a>
        <a href="logout.php">Logout</a>
      </nav>
    </div>
  </th><th>
    <div class="profile-section">
    <a href="profile.php"><img src="images/ppp.jpg" alt="Profile"style="width: 35%;border-radius: 50%;"></img></a>	   <br/>
	   <?php echo $login_session; ?>
    </div>
  </th></tr> 
    </table></div>

    <?php
    $q = "SELECT * FROM clothes"; 
 $results = mysqli_query($con,$q); 
 if($results){ 
    echo "There is ".$rowcount=mysqli_num_rows($results)." products in database"; 
 }else{
   echo "0";
 }
  ?>
  <?php
include("Connection.php");

                echo "<table border=1 width='100%'>
                <tr>
                <th>ClothesId </th>
                <th>Clothes </th>
                <th>Description </th>
                <th>size</th>
				<th>Price</th> 
                <th>Date</th>
                <th colspan=3>ACTION </th>
                </tr>";

                $qer = "SELECT * FROM clothes";
				$results = mysqli_query($con, $qer);
                while($r= mysqli_fetch_array($results)){
                    echo "<tr>
                    <td>".$r['ClothesId']."</td>
                    <td>".$r['Clothes']."</td>
                    <td>".$r['Description']."</td>
                    <td>".$r['size']."</td>
					<td>".$r['price']."</td>
					<td>".$r['Date']."</td>";
                    echo "
                    <td><a href='ViewUser.php?ClothesId=$r[ClothesId]'> View </a></td>
                    <td><a href='EditUser.php?ClothesId=$r[ClothesId]'> Edit </a></td>
                    <td><a href='DeactivateUser.php?ClothesId=$r[ClothesId]'> Deactivate </a></td>
                    </tr>";
                }
                echo "</table>";
            
        ?>

<footer>
    <div class="container">
      <p>&copy; 2024 Kigali Social Shop  online. All rights reserved.</p>
      <ul>
        <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
        <li><a href="https://www.youtube.com" target="_blank">YouTube</a></li>
        <!-- Add more social media links as needed -->
      </ul>
    </div>
  </footer>



</body>
</html>