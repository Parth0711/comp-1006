  <?php  include_once('./_header.php')  ?>
  <?php
   include('./.env.php');
  
         //This is my connection string
         
      //  $conn = connect();
  $conn=mysqli_connect(getenv('DB_HOST'),getenv('DB_USER'),getenv('DB_PASS'),getenv('DB'));
 
  // Step 2: (5 points) Retrieve all the 'supers' rows from your database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  
  //$sql="SELECT * from supers ORDER by  id ASC";
 // $result = mysqli_query($conn,$sql);
 $res=mysqli_query($conn, "SELECT * FROM supers");
 $rows=mysqli_fetch_all($res, MYSQLI_ASSOC);
 //var_dump($rows);
?>

<!-- Step 3: (2 points) Include your header here -->
<?php  include_once('./_header.php')  ?>

    <h1>This is our navigation</h1>
    

<!-- Step 4: (2 points) Create a navigation bar for home.php and new.php -->
<!-- CREATE YOUR NAVIGATION HTML BELOW THIS LINE -->
<nav>
<div class="topnav">
  <a href="./index.php">Home</a>
  <a href="./new.php">New</a>
</div>

</nav>
<!-- Step 5: (15 points) Create a table that display each row from the database -->
<!-- You only need to display the first_name, last_name, date_of_birth, -->
<!-- alias, active, and hero columns -->

<!-- Step 6: (6 points) Create action links pointing to 'edit.php' and 'delete.php' -->
<!-- Ensure there was one edit and delete link for each row -->

<!-- CREATE YOUR TABLE BELOW THIS LINE -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Supers</title>

  <style>
     table,th,td{
        border:1px dashed black;
        padding:0.25cm;
     }
     </style>
  </head>
  <body>
  <table>
  <thead>
       <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date of birth</th>
        <th>Alias</th>
        <th>Active</th>
        <th>Hero</th>
        <th>Action</th>
       </tr>
     </thead>

     <tbody>
        <?php
           foreach ($rows as $row) {
             echo "<tr>";
             echo "<td>{$row['first_name']}</td>";
             echo "<td>{$row['last_name']}</td>";
             echo "<td>{$row['date_of_birth']}</td>";
             echo "<td>{$row['alias']}</td>";
             echo "<td>{$row['active']}</td>";
             echo "<td>{$row['hero']}</td>";
             echo "<td>";
             echo "<a href='./edit.php?id={$row['id']}'>edit</a>";
             echo " | ";
             echo "<a href='./delete.php?id={$row['id']}'>delete</a>";
             echo"</td>";
             echo"</tr>";
           }
        ?>
     </tbody>
    </table>
 </body>
 </html>

<!-- Step 7: (2 points) Include your footer here -->

<?php include_once('./_footer.php') ?>

<!-- TOTAL POINTS POSSIBLE: 34 -->