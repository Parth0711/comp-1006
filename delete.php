<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('./.env.php');
  //This is my connection string
  $conn=mysqli_connect(getenv('DB_HOST'),getenv('DB_USER'),getenv('DB_PASS'),getenv('DB'));
  // Step 2: (20 points) Delete the existing 'supers' row from the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE

  var_dump($_GET);
$sql= "DELETE FROM supers WHERE id={$_GET['id']}";
echo $sql;

$res=mysqli_query($conn,$sql);

  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE

  if($res){
    echo "The row was deleted successfully.";
}
else{
    echo "There was an error deleting the row:" .mysqli_error($conn);
}

  
  // TOTAL POINTS POSSIBLE: 38
?>