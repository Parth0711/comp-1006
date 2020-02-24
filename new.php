<!-- Step 1: (2 points) Include your header here -->
<!DOCTYPE html>
<head>
<title>Add Supers</title>
</head>

<?php  include_once('./_header.php')  ?>

<!-- Step 2: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->

<body>
<nav>

  <a href="./index.php">Home</a>
</nav>
<!-- Step 3: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->



<!-- Step 4: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->

<header>
  <h1 class="display-1">New Supers</h1>
  <hr>
</header>

<form action="./insert.php" method='post'>

	<div>
		<label>First Name</label>
		<input name="first name">
		
	</div>

	<div>
		<label>Last Name</label>
		<input name="last_name">
	</div>

	<div>
		<label>Date of Birth</label>
		<input type="date" id="dob" name="date_of_birth">
	</div>

    <div>
		<label>Alias</label>
		<input name="alias">
	</div>

    <div>
		<label>Active</label>
		<select id="active_opt" name="active">
			<option for="active_opt" value="select">select</option>
			<option for="active_opt" value="active_yes">yes</option>
			<option for="active_opt" value="active_not">no</option>
		</select>
	</div>

    <div>
		<label>Hero</label>
		<select id="hero_opt" name="hero">
			<option for="hero_opt" value="select">select</option>
			<option for="hero_opt" value="hero_yes">yes</option>
			<option for="hero_opt" value="hero_not">no</option>
		</select>
	</div>

	<button type="submit">Create</button>
</form>
</body>
</html>

<!-- Step 5: (2 points) Include your footer here -->

<?php include_once('./_footer.php') ?>

<!-- TOTAL POINTS POSSIBLE: 24 -->