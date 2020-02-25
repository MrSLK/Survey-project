
<?php

require "conn.php";

$conn = $pdo->open();

try{
	//MAX age
	$stmt = $conn->prepare("SELECT MAX(age) AS max FROM `customer`");
	$stmt->execute();
	$max = $stmt->fetch();

	//MIN age
	$stmt = $conn->prepare("SELECT MIN(age) AS min FROM `customer`");
	$stmt->execute();
	$min = $stmt->fetch();

	//AVG age
	$stmt = $conn->prepare("SELECT ROUND(AVG(age), 1) AS avg FROM `customer`");
	$stmt->execute();
	$age = $stmt->fetch();

	//All People
	$stmt = $conn->prepare("SELECT COUNT(id) AS EVERYONE FROM `customer`");
	$stmt->execute();
	$count = $stmt->fetch();

	//Entertainment People
	$stmt = $conn->prepare("SELECT COUNT(food) AS FOOD FROM `customer`");
	$stmt->execute();
	$likes = $stmt->fetch();

	//Pizza People
	$stmt = $conn->prepare("SELECT COUNT(id) AS PIZZA FROM `customer` WHERE food = 'Pizza'");
	$stmt->execute();
	$pizza = $stmt->fetch();

	//Pasta People
	$stmt = $conn->prepare("SELECT COUNT(id) AS PASTA FROM `customer` WHERE food = 'Pasta'");
	$stmt->execute();
	$pasta = $stmt->fetch();

	//pap And Wors People
	$stmt = $conn->prepare("SELECT COUNT(id) AS papAndWors FROM `customer` WHERE food = 'Pasta'");
	$stmt->execute();
	$papAndWors = $stmt->fetch();

	//Eat Out
	$stmt = $conn->prepare("SELECT COUNT(id) AS EatOut FROM `customer` WHERE eatOut = 'agree' || eatOut = 'strongAgree'");
	$stmt->execute();
	$eatOut = $stmt->fetch();

	//Movies
	$stmt = $conn->prepare("SELECT COUNT(id) AS Movies FROM `customer` WHERE movies = 'agree' || eatOut = 'strongAgree'");
	$stmt->execute();
	$movies = $stmt->fetch();

	//TV
	$stmt = $conn->prepare("SELECT COUNT(id) AS TV FROM `customer` WHERE tv = 'agree' || eatOut = 'strongAgree'");
	$stmt->execute();
	$tv = $stmt->fetch();

	//Radio
	$stmt = $conn->prepare("SELECT COUNT(id) AS Radio FROM `customer` WHERE radio = 'agree' || eatOut = 'strongAgree'");
	$stmt->execute();
	$radios = $stmt->fetch();


}
catch(PDOException $e)
{
	echo $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel = "stylesheet" type = "text/css" href="css/bootstrap.css">
</head>
<body>


  <section id="download" class="download-section content-section text-center" style="background-image:url('image/Designer Page.jpg');">
    <div class="container"><br><br><br>
	    <div class="row col-md-7 col-md-offset-3">
		     <div class="panel panel-primary">
			     <div class="panel-heading text-center">
					 <h1>Survey Stats</h1>
	             </div>
				 <div class="panel-body">
					 <form action = "connect.php" method="post">
					     <div class="form-group" align="left">
						     <label for="totSurvey">Total number of surveys: <?php echo $count['EVERYONE'];?></label> 
						 </div>
					     <div class="form-group" align="left">
						     <label for="avgAge">Average age: <?php echo $age['avg'];?> </label>
						 </div>
						 <div class="form-group" align="left">
						     <label for="oldPerson">Oldest person who participated in survey: <?php echo $max['max'];?> </label>
						 </div>
						 <div class="form-group" align="left">
						     <label for="youngPerson">Youngest person who participated in survey:  <?php echo $min['min'];?> </label>
						 </div>
						 <br>

						 <div class="form-group" align="left">
						     <label for="likedPizza">Percentage of people who like Pizza: <?php echo ($pizza['PIZZA'] / $likes['FOOD']) * 100, "%";?> </label>
						 </div>
						 	 <div class="form-group" align="left">
						     <label for="likedPata">Percentage of people who like Pasta: <?php echo ($pasta['PASTA'] / $likes['FOOD']) * 100, "%";?> </label>
						 </div>
						 	 <div class="form-group" align="left">
						     <label for="likedPapAndWors">Percentage of people who like Pap and wors: <?php echo ($papAndWors['papAndWors'] / $likes['FOOD']) * 100, "%";?> </label> 
						 </div><br>

						 		 <div class="form-group" align="left">
						     <label for="likedEatOut">People like to eat out: <?php echo $eatOut['EatOut'];?> </label>
						 </div>
						 	 <div class="form-group" align="left">
						     <label for="likedMovies">People like to watch movies: <?php echo $movies['Movies'];?> </label>
						 </div>
						 	 <div class="form-group" align="left">
						     <label for="likedTV">People like to watch TV: <?php echo $tv['TV'];?> </label> 
						 </div>
						 </div>
						 	 <div class="form-group" align="left">
						     <label for="likedRadio">People like to listen to the radio: <?php echo $radios['Radio'];?> </label>
						 </div><br>
						 		
						 </div>


					 </form>
					 <a href="index.php"><button>Home</button></a>
					 <div class="panel-footer text-right">
						 <small>&copy; Koenaite Shiba</small>
	             </div>

	         </div>
	    </div>
	</div>
	</section>

</body>
</html>