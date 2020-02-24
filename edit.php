<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE

include('./.env.php');
//This is my connection string
$conn=mysqli_connect(getenv('DB_HOST'),getenv('DB_USER'),getenv('DB_PASS'),
getenv('DB'));

  // Step 2: (8 points) Retrieve the 'supers' row from your database
  // Ensure you use the condition to get only the one specific row
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE

  $result=mysqli_query($conn,"SELECT * FROM supers WHERE id={$_GET['id']}");
$row=mysqli_fetch_assoc($result);
var_dump($row);
?>

<!-- Step 3: (2 points) Include your header here -->
<?php  include_once('_header.php')  ?>

<!DOCTYPE html>
<head> 
    <title>Edit supers</title>
    </head>

    <body>
<header>
    <h1>Edit supers</h1>
</header>

<!-- Step 4: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->

<form action="./update.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['id'] ?>">

<!-- Step 5: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->



<!-- Step 7: (10 points) Prepopulate the form with the values from the retrieved row -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->

<div>
        <label>First Name:</label><br>
        <input name="first_name" value="<?php echo $row['first_name'] ?>">
    </div>
    <div>
        <label>Last Name:</label><br>
        <input name="last_name" value="<?php echo $row['last_name'] ?>">
    </div>
    <div>
        <label>Date of Birth:</label><br>
        <input type="date"  id="dob" name="date_of_birth">
    </div>
    <div>
        <label>Alias:</label><br>
        <input name="alias"  value="<?php echo $row['alias'] ?>">
    </div>
    <div>
        <label>Active:</label><br>
        <select id="active_opt" name="active">
			<option for="active_opt" value="select">select</option>
			<option for="active_opt" value="active_yes">yes</option>
			<option for="active_opt" value="active_not">no</option>
		</select>
    </div>
    <div>
		<label>Hero:</label><br>
		<select id="hero_opt" name="hero">
			<option for="hero_opt" value="select">select</option>
			<option for="hero_opt" value="hero_yes">yes</option>
			<option for="hero_opt" value="hero_not">no</option>
		</select>
	</div>
    <button type="submit">Create</button> 
<!-- Step 6: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->

<form action="./update.php" method="post">
<!-- Step 8: (2 points) Include your footer here -->

<?php include_once('./_footer.php') ?>

<!-- TOTAL POINTS POSSIBLE: 44 -->